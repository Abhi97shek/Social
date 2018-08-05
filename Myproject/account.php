<?php include "connect.php";
include "functions.php";
session_start();
$email=$_SESSION['emailname'];
$query="SELECT id FROM users WHERE Email='$email'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_row($result);
$query1="SELECT Firstname,Lastname from users_meta WHERE userid='$row[0]'";
$result=mysqli_query($connection,$query1);
$row1=mysqli_fetch_assoc($result);
if(!$result)
{
die("name query failed".mysqli_error());	
}
else
{
	$fname=$row1['Firstname'];
	 $lname=$row1['Lastname'];
}
	$selectprofilecover="SELECT Profileimage FROM users_meta WHERE userid='$row[0]'";
		$result1=mysqli_query($connection,$selectprofilecover);
		$rowprofile=mysqli_fetch_row($result1);
		if(!$result1)
	{
		die("insert query failed".mysqli_error());
	}
		else
		{
		
		 $profileimage= $rowprofile[0];
		}
	$uploadimage="SELECT image FROM posts_image WHERE user='$row[0]'";
	$result2=mysqli_query($connection,$uploadimage);
	$rowimage=mysqli_fetch_row($result2);
	if(!$result2)
	{
		die("image uploading failed".mysqli_error());
	}
	else
	{
		$selectedimage=$rowimage[0];	
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="css/accountcss.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include "topnav.php"; ?>
	<main class="mainsection">
    	<div class="container row">
        	<?php include "leftnav.php"; ?>
    		<div class="col-lg-5">
            	
                		<div class="statusbar">
                        	<div class="statusicon">
                        		<i class="fa fa-pencil col-lg-1 pencilicon" aria-hidden="true"></i>
                                <p class="col-lg-4 create">Create a Post</p>
                            </div>
                            <form method="post" id="uploadform">
                            <textarea class="status" placeholder="What's in Your Mind"></textarea>
                			<input type="button" value="Upload" class="upload btn"/>
                            <input type="button" data-toggle="modal" data-target="#imageupload" value="Upload Image" class="btn"/>
                			</form>
                             <div class="modal fade" id="imageupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Image For Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" id="uploadhomeimage">
              <div class="modal-body">
               	<input type="file" name="imageupload" class="fileimage" value="Choose Image"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary uploadcover" value="submit"/> 
                <input type="hidden" value="uploadimage" name="selectimage"/>        
              </div>
               </form>
            </div>
          </div>
        </div>  
                		</div>
                        
            	<div id="postlist">	
                     <?php include "connect.php";
						session_start();	
						$email=$_SESSION['emailname'];
						$query="SELECT id FROM users WHERE Email='$email'";
						$result=mysqli_query($connection,$query);
						$row=mysqli_fetch_row($result);
						$query4="select users_meta.id,posts.id as id,Firstname,Lastname,Profileimage,content,posts_image.image From users_meta,friendrequest, posts left join posts_image on (posts.id = posts_image.post_id) Where ((sender_id='$row[0]' AND receiver_id=users_meta.userid) OR (receiver_id='$row[0]' AND sender_id=users_meta.userid)) AND posts.user = users_meta.userid AND request='2'
ORDER BY posts.createdate DESC";
						$result4=mysqli_query($connection,$query4);
						$fnamefriend=array();
						$lnamefriend=array();
						$profile=array();
						$postid=array();
						$content=array();
						$imagefriend=array();
						while($row4=mysqli_fetch_assoc($result4))
						{
							
							$fnamefriend[]=$row4['Firstname'];
							$lnamefriend[]=$row4['Lastname'];
							$profile[]=$row4['Profileimage'];
							$content[]=$row4['content'];
							$postid[]=$row4['id'];	
							$imagefriend[]=$row4['image'];
						}
						$length=count($fnamefriend);
						for($i=0;$i<$length;$i++)
						{
							echo "<div class='postshow'>";
								echo "<div class='postimage col-lg-2'>";
									echo "<img src=".$profile[$i].">";
								echo "</div>";
								echo "<div class='postimage1 col-lg-4'>";
									echo  ucfirst($fnamefriend[$i]).' '.ucfirst($lnamefriend[$i]);
									
								echo "</div>";
								echo "<div class='post'>";
									echo "<p>".$content[$i]."</p>";
										
									if($content[$i]!= NULL){
										echo "<img src='".$imagefriend[$i]."'>";
									}
									
								echo "</div>";
							
								echo "<div class='icons row'>";
										$countquery="SELECT id FROM likes WHERE post_id='$postid[$i]' AND liker_id='$row[0]'";
										$result3=mysqli_query($connection,$countquery);
										$users=array();
										while($row5=mysqli_fetch_row($result3))
										{
										$users[]=$row5[0];	
										}
										$number=count($users);
									echo "<div class='likeicon col-lg-2 text-center'>";
											echo "<p class='number'>".$number."</p>";	
											$email=$_SESSION['emailname'];
											$query="SELECT id FROM users WHERE Email='$email'";
											$result=mysqli_query($connection,$query);
											$row=mysqli_fetch_row($result);
											$checkquery="SELECT post_id,liker_id FROM likes WHERE post_id='$postid[$i]' AND liker_id='$row[0]'";
											$result1=mysqli_query($connection,$checkquery);
											if(mysqli_num_rows($result1)<=0)
											{
											echo "<p class='like' data-hidden='$postid[$i]' data-like='0'><i class='fa fa-thumbs-up' aria-hidden='true'></i> Like</p>";
											}
											else
											{			
											echo "<p class='like' data-hidden='$postid[$i]' data-like='1' style='color:#03F'><i class='fa fa-thumbs-down' aria-hidden='true'></i>Unlike</p>";
												
											}
												echo "</div>";	
													$commentquery="SELECT text FROM comments WHERE post_id='$postid[$i]'";
								$result5=mysqli_query($connection,$commentquery);
								if(!$result5)
									{
									die("COMMENT query failed".mysqli_error);
									}
								else
									{
								$comments=array();
								while($row6=mysqli_fetch_row($result5))
										{
									$comments[]=$row6[0];
										}
							$commentlength=count($comments);
									}	
								  echo "<div class='commenticon col-lg-2 text-left'>";
								 		echo "<p class='comments'><i class='fa fa-comment-o' aria-hidden='true'>Comment</p></i>";
									echo "</div>";	
									 
								  echo "<div class='downcomment col-lg-8 text-right'>";
								  	echo "<i class='down fa fa-caret-down' data-hidden='0' aria-hidden='true'></i>";
									echo "<span>". $commentlength."</span>";
								  echo "</div>";
								 
								
								echo "</div>";
								session_start();	
						$email=$_SESSION['emailname'];
						$query="SELECT id FROM users WHERE Email='$email'";
						$result=mysqli_query($connection,$query);
						$row=mysqli_fetch_row($result);
								$imagequery="SELECT Profileimage FROM users_meta WHERE userid='$row[0]'";
								$result6=mysqli_query($connection,$imagequery);
								if(!$result6)
								{
								die("PROFILE IMAGE FOR COMMENT QUERY FAILED".mysqli_error()); 	
								}
								else
								{
								$row7=mysqli_fetch_row($result6);
								}
							
							$profilecomment="SELECT Profileimage FROM users_meta,comments WHERE comments.post_id='$postid[$i]' AND users_meta.userid=comments.commenter_id";
								$result7=mysqli_query($connection,$profilecomment);
								$array=array();
							while($row8=mysqli_fetch_row($result7))
							{
								$array[]=$row8[0];
								
							}
								echo "<div class='showcomment'>";
										echo"<div class='showcomment1'>";
										for($j=0;$j<$commentlength;$j++)
												{
													echo "<div class='clear'></div>";
													echo "<div class='commentimage1 col-lg-1'>";
													echo "<img src=".$array[$j].">";
													echo "</div>";
													echo "<div class='commenttext1' col-lg-8'>";
													echo "<p>". $comments[$j] ."<p>";
													echo "</div>";
													
												}
												echo "<div class='clear'></div>";	
												echo "<div class='commentimage col-lg-1'>";	
													echo "<img src=".$row7[0].">";

												echo "</div>";
												echo "<div class='commenttext' col-lg-10'>";
												
												echo "<input type='text' data-id='$postid[$i]'placeholder='What You Thing About This 'class='comment' name='comment'>";
													
													
														
												echo "</div>";
										echo "</div>";
								echo "</div>";
						echo "</div>";					
						}
						
						
						
					?>
                  </div>  
            </div>    
 	  </div>
    </main>
    
    
    
    
    
    
<script src="js/jquery.min.js" type="text/javascript"></script>   
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>