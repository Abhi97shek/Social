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
	$searchfriend=$_POST['searchfriend'];
$queryfriend="SELECT Firstname,Lastname,Profileimage,userid From Users_meta WHERE Firstname LIKE '%$searchfriend%' OR Lastname LIKE '%$searchfriend%'";
$resultfriend=mysqli_query($connection,$queryfriend);
$fnamearray=array();
$lnamearray=array();
$profilearray=array();
$useridarray=array();
while($row3=mysqli_fetch_assoc($resultfriend))
{
	$fnamearray[]=$row3['Firstname'];
	$lnamearray[]=$row3['Lastname'];
	$profilearray[]=$row3['Profileimage'];
	$useridarray[]=$row3['userid'];
}
$length=count($fnamearray);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Friends</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="css/friendscss.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include "topnav.php";?>
    <main class="mainsection">
    	<div class="container row">
    		<?php include "leftnav.php"; ?>
            <div class="col-lg-7">
                		<div class="showfriends">
                        	<?php 
							for($i=0;$i<$length;$i++)
								{
                        			echo "<div class='friends row'>";
                            			echo	"<div class='col-lg-3 imageicon text-right'>";
                                			echo	"<img src='";
											if(empty($profilearray[$i]))
											{
					echo "uploads\blank_profile-500x500-ms0y9mc8g8zdhq1pys4stndcrafzdl9g7kr4h7xymg.png";
											}
											else
											{
										echo  $profilearray[$i];
											}
									echo	"'>";
                                		echo"</div>";
                                	echo "<div class='col-lg-5 friendsinfo'>";
                                	echo "<p>".ucfirst($fnamearray[$i])." ".ucfirst($lnamearray[$i])."</p>";
									
                                	echo "</div>";
                                echo	"<div class='col-lg-4 sendbutton'>";
                                echo	"<form method='post'>";
	$select="SELECT sender_id,receiver_id FROM friendrequest WHERE receiver_id='$useridarray[$i]' AND sender_id='$row[0]'";			
				$getdata=mysqli_query($connection,$select);
					if(mysqli_num_rows($getdata)>0)
					{
                                echo	"<button type='button' value='AddFriend' data-myAttri=".$useridarray[$i]." class='btn btn-primary sentbutton' disabled><img src='uploads/Double Ring.gif ' width='20px' height='20px'>Request Send</button>";
					}
					else
					{
						echo	"<button type='button' value='AddFriend' data-myAttri=".$useridarray[$i]." class='btn btn-primary sentbutton'><img src='uploads/Double Ring.gif ' width='20px' height='20px'>Add Friend</button>";		
					}
                                echo     "</form>";
								    
                               echo  "</div>";
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