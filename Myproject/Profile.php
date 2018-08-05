<?php include "functions.php";
include "connect.php";
	session_start();
	$email=$_SESSION['emailname'];
    $query="SELECT id FROM users WHERE Email='$email'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
    $selectquerycover="SELECT profilecover FROM users_meta WHERE userid='$row[0]'";
		$result1=mysqli_query($connection,$selectquerycover);
		$rowcover=mysqli_fetch_row($result1);
		if(!$result1)
	{
		die("insert query failed".mysqli_error());
	}
		else
		{
		$coverpath=$rowcover[0];
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
			
		$query1="SELECT Firstname,Lastname from users_meta WHERE userid='$row[0]'";
		$resultname=mysqli_query($connection,$query1);
		$rowname=mysqli_fetch_assoc($resultname);
		if(!$result)
		{
		die("name query failed".mysqli_error());	
		}
		else
		{
			$fname=$rowname['Firstname'];
			$lname=$rowname['Lastname'];
		}
		$query3="SELECT Firstname,Profileimage FROM users_meta,friendrequest WHERE (sender_id='$row[0]' AND  receiver_id=userid) OR (receiver_id='$row[0]' AND 	sender_id=userid) AND request='2'";
		$resultprofile=mysqli_query($connection,$query3);
		$fnamefriend=array();
		$profilefriend=array();
		if(!$resultprofile)
		{
		die("Friends query does not work".mysqli_error());	
		}
		else
		{
		while($row4=mysqli_fetch_assoc($resultprofile))
		{
				$fnamefriend[]=$row4['Firstname'];
				$profilefriend[]=$row4['Profileimage'];
		}
	$length=count($profilefriend);
		}
		
		
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ucfirst($fname)." ".ucfirst($lname); ?></title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="css/Profilecss.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include "topnav.php"; ?>
    <main>
    	<div class="container row row1">
        	<div class="col-lg-1"></div>
        	<div class="profilecover col-lg-10" style="background-image:url('<?php
				if(empty($coverpath))
				{
					echo "uploads\dummy\profilecover.png";
				}
				else
				{	
					echo $coverpath;
				}
			?>')">
         
        		<a  data-toggle="modal" data-target="#myModal" class="btn"><p class="editcover"><i class="fa fa-camera 			  				cameraicon" aria-hidden="true"></i>Edit Cover</p></a> 
                <p class="name"><?php echo ucfirst($fname)." ".ucfirst($lname); ?></p>  	 
        	</div>
       		 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Your New Cover</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" id="coverform">
              <div class="modal-body">
               	<input type="file" name="cover" class="filecover" value="Choose Cover"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary uploadcover" value="submit"/> 
                <input type="hidden" value="upload" name="action"/>        
              </div>
               </form>
            </div>
          </div>
        </div>
        
        	<div class"col-lg-1"></div>
        	<div class="profilepicture">
        		<img src="<?php  
					if(empty($profileimage))
					{
						echo "uploads\blank_profile-500x500-ms0y9mc8g8zdhq1pys4stndcrafzdl9g7kr4h7xymg.png";
					}
					else
					{
						echo $profileimage;
						
					}
					?>">
                <a data-toggle="modal" data-target="#Profilemodal" class="btn"><i class="fa fa-pencil pencil" aria-hidden="true"></i></a>
        	</div>
             <div class="modal fade" id="Profilemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         		 <div class="modal-dialog" role="document">
            			<div class="modal-content">
              				<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Choose Your New Profile Pic</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  				<span aria-hidden="true">&times;</span>
                				</button>
              				</div>
              				<form method="post" id="Profileform">
              				<div class="modal-body">
               					<input type="file" name="Profileimage" class="fileprofile" value="Choose Profile Pic"/>
              				</div>
              				<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary uploadprofile" value="submit"/> 
                                <input type="hidden" value="uploadProfile" name="ProfileUpload"/>        
              				</div>
               				</form>
            		</div>
          		</div>
        	</div>     
    	</div>
        <div class=" profileedit row">
        	<div class="profileinformation  col-lg-8 col-lg-offset-1">
            	<div class="col-lg-offset-3 menuprofile">
                   	<ul class="profilelist"> 
                    	<li><a>Timeline</a></li>
                        <li><a>About</a></li>
                        <li><a>Friends</a></li>
                        <li><a>Photos</a></li>         
                    </ul>    	
                </div>    
            </div>
        </div>
    </main>
    <header class="container row underprofile">
    	<div class="col-lg-1"></div>
        <div class="col-lg-10 ownpost">
        	<div class="insideownpost row">
            	<div class="friendside col-lg-5">
                
                    <?php 
						for($i=0;$i<$length;$i++)
						{
                		echo "<div class='profilephoto col-lg-3'>";
						echo "<div class='friendsimage'>";
						echo 	"<img src=";
						if(empty($profilefriend[$i]))
					{
						echo "uploads\blank_profile-500x500-ms0y9mc8g8zdhq1pys4stndcrafzdl9g7kr4h7xymg.png";
					}	
					else
					{
						echo	$profilefriend[$i];
					}
					echo	">";
						
						echo "</div>";	
						
					echo    "<p>".$fnamefriend[$i]."</p>";
                                            	
                   		echo  "</div>";
						}
						?>
                    	
                
                </div>
                <div class="postside col-lg-5">
                
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
						$query1="SELECT posts.id as postid,content,image FROM posts left join posts_image on (post_id=posts.id) WHERE posts.user='$row[0]' ORDER BY posts.createdate";					
						$result1=mysqli_query($connection,$query1);
						$array=array();
						while($row1=mysqli_fetch_row($result1))
						{		
							$array[]=$row1;	
						}
						$reverse=array_reverse($array);
						$length=count($reverse);
						for($i=0;$i<$length;$i++)
						{
							echo "<div class='postshow'>";
								echo "<div class='postimage col-lg-2'>";
									echo "<img src=".$profileimage.">";
								echo "</div>";
								echo "<div class='postimage1 col-lg-4'>";
									echo  ucfirst($fname).' '.ucfirst($lname);
								echo "</div>";
								echo "<div class='post'>";
									echo "<p>".$reverse[$i][1]."</p>";
									if($reverse[$i][1] != NULL){
										echo "<img src='".$reverse[$i][2]."'>";
									}
									
								echo "</div>";
							
								echo "<div class='icons row'>";
								$countquery="SELECT id FROM likes WHERE post_id=". $reverse[$i][0] ."";
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
								$checkquery="SELECT post_id,liker_id FROM likes WHERE post_id=". $reverse[$i][0] ." AND liker_id='$row[0]'";
								$result1=mysqli_query($connection,$checkquery);
								if(mysqli_num_rows($result1)<=0)
								{
								echo "<p class='like' data-hidden='". $reverse[$i][0] ."' data-like='0'><i class='fa fa-thumbs-up' aria-hidden='true'></i> Like</p>";
								}
								else
								{			
								echo "<p class='like' data-hidden='". $reverse[$i][0] ."' data-like='1' style='color:#03F'><i class='fa fa-thumbs-down' aria-hidden='true'></i>Unlike</p>";
									
								}
									echo "</div>";
								$commentquery="SELECT text FROM comments WHERE post_id=".$reverse[$i][0];
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
								 		echo "<p><i class='fa fa-comment-o' aria-hidden='true'>Comment</p></i>";
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
							
						$profilecomment="SELECT Profileimage FROM users_meta,comments WHERE comments.post_id=". $reverse[$i][0] ." AND users_meta.userid=comments.commenter_id";
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
													
												echo "<input type='text' data-id=". $reverse[$i][0] ." placeholder='What You Thing About This 'class='comment' name='comment'>";
												
													
														
												echo "</div>";
										echo "</div>";
								echo "</div>";
								
								
								
								
								
								
								
								
								
								echo "</div>";	
						}
						
						
						
					?>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                </div>
                
            
            
            </div>
        
        </div>
    
    
    
    
    
    
    
    </header>
    
    
    
    
    
    
    
 <script src="js/jquery.min.js" type="text/javascript"></script>   
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>