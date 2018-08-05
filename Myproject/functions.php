<?php include "connect.php";
session_start();
if($_POST['action']=="hello")
{
	$status=$_POST['status'];	
	$email=$_SESSION['emailname'];
	$query="SELECT id FROM users WHERE Email='$email'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
	$query1="INSERT INTO posts (content,user) VALUES ('$status','$row[0]')";
	if(!$result1=mysqli_query($connection,$query1))
	{
		die("insert query failed".mysqli_error());
	}
	else
	{
		
		$postid=mysqli_insert_id($connection);
		$imageid=$_POST['imagepost'];
		if(!empty($imageid))
		{
			$imageupdatequery="UPDATE posts_image SET post_id='$postid' WHERE id='$imageid'";
			if(!$result=mysqli_query($connection,$imageupdatequery))
			{
		die("insert query failed".mysqli_error());
			}
		}
		echo $status;
	}
}
if($_POST['action']=="upload")
{
	$email=$_SESSION['emailname'];
	$query="SELECT id FROM users WHERE Email='$email'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
	if(!file_exists("uploads/$row[0]"))
	{
		mkdir("uploads/$row[0]",0777);
		
	}
	$cover=$_FILES['cover'];
	$name=$_FILES['cover']['name'];
	$path="uploads/$row[0]/$name";
	move_uploaded_file($_FILES['cover']['tmp_name'],$path);	
	$uploadcoverquery="UPDATE users_meta SET profilecover='$path' where userid='$row[0]'";
	if(!$result=mysqli_query($connection,$uploadcoverquery))
	{
		die("insert query failed".mysqli_error());
	}
	else
	{
		$selectquerycover="SELECT profilecover FROM users_meta WHERE userid='$row[0]'";
		$result1=mysqli_query($connection,$selectquerycover);
		$rowcover=mysqli_fetch_row($result1);
		if(!$result1)
	{
		die("insert query failed".mysqli_error());
	}
		else
		{
		 echo 	$rowcover[0];
		}	
	}
}
	if($_POST['ProfileUpload']=="uploadProfile")
{
	$cover=$_FILES['Profileimage'];
	$name=$_FILES['Profileimage']['name'];
	$path="uploads/Profile/$name";
	move_uploaded_file($_FILES['Profileimage']['tmp_name'],$path);	
	$email=$_SESSION['emailname'];
	$query="SELECT id FROM users WHERE Email='$email'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
	$uploadprofilequery="UPDATE users_meta SET Profileimage='$path' where userid='$row[0]'";
	if(!$result=mysqli_query($connection,$uploadprofilequery))
	{
		die("insert query failed".mysqli_error());
	}
	else
	{
		$selectprofilecover="SELECT Profileimage FROM users_meta WHERE userid='$row[0]'";
		$result1=mysqli_query($connection,$selectprofilecover);
		$rowprofile=mysqli_fetch_row($result1);
		if(!$result1)
	{
		die("insert query failed".mysqli_error());
	}
		else
		{
		
		 echo $rowprofile[0];
		}	
	}
}
if($_POST['selectimage']=="uploadimage")
{
	$email=$_SESSION['emailname'];
	$query="SELECT id FROM users WHERE Email='$email'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
	$cover=$_FILES['imageupload']; 
	$name=$_FILES['imageupload']['name'];
	if(!file_exists(uploads/$row[0]/homeuploads))
	{
		mkdir("uploads/$row[0]/homeuploads",0777);
	}
	$path="uploads/$row[0]/homeuploads/$name";
	move_uploaded_file($_FILES['imageupload']['tmp_name'],$path);	
	$uploadimagequery="INSERT INTO posts_image (image,user) VALUES ('$path','$row[0]')";
	if(!$result=mysqli_query($connection,$uploadimagequery))
	{
		die("insert query failed".mysqli_error());
	}
	else
	{
		$getimageid=mysqli_insert_id($connection);
		echo $getimageid;
		
	}
}
if($_POST['action']=="goodbye")
{
    session_destroy();
	echo "goodbye";
}
if($_POST['action']=="request")
{
	$email=$_SESSION['emailname'];
	$query="SELECT id FROM users WHERE Email='$email'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
	$friendid=$_POST['friendid'];

	$friendquery="INSERT INTO friendrequest(sender_id,receiver_id,request) VALUES('$row[0]','$friendid','1')"; 
	if(!$result=mysqli_query($connection,$friendquery))
	{
		die("FRIEND REQUEST QUERY FAILED".mysqli_error());	
	}	
}
if($_POST['action']=="accept")
{
			$email=$_SESSION['emailname'];
			$query="SELECT id FROM users WHERE Email='$email'";
			$result=mysqli_query($connection,$query);
			$row=mysqli_fetch_row($result);
			$friendid=$_POST['friendid'];
			$select="UPDATE friendrequest SET request='2' WHERE receiver_id='$row[0]' AND sender_id='$friendid'";
			if(!$result=mysqli_query($connection,$select))
			{
				die("ACCEPT QUERY FAILED".mysqli_error());	
			}
}
if($_POST['action']=="delete")
{
		$email=$_SESSION['emailname'];
			$query="SELECT id FROM users WHERE Email='$email'";
			$result=mysqli_query($connection,$query);
			$row=mysqli_fetch_row($result);
			$friendid=$_POST['friendid'];
			$select="DELETE  FROM friendrequest WHERE receiver_id='$row[0]' AND sender_id='$friendid'";
			if(!$result=mysqli_query($connection,$select))
			{
				die("DELETE QUERY FAILED".mysqli_error());	
			}
}
if($_POST['action']=="like")
{
			$email=$_SESSION['emailname'];
			$query="SELECT id FROM users WHERE Email='$email'";
			$result=mysqli_query($connection,$query);
			$row=mysqli_fetch_row($result);
			$postid=$_POST['postid'];
			$checkquery="SELECT post_id,liker_id FROM likes WHERE post_id='$postid' AND liker_id='$row[0]'";
			$result1=mysqli_query($connection,$checkquery);
			
			if(mysqli_num_rows($result1)<=0)
			{ 
			$query="INSERT INTO likes (post_id,liker_id) VALUES ($postid,'$row[0]')";
			if(!$result=mysqli_query($connection,$query))
			{
				die("LIKE QUERY FAILED".mysqli_error());	
			}
			}
			$countquery="SELECT id FROM likes WHERE post_id='$postid'";
			$result3=mysqli_query($connection,$countquery);
			$users=array();
			while($row5=mysqli_fetch_row($result3))
			{
			$users[]=$row5[0];	
			}
			$response=array();
			$number=count($users);
			$response['likes']=$number;
		echo json_encode($response);			
					die;
}
if($_POST['action']=="unlike")
	{	
			$email=$_SESSION['emailname'];
			$postid=$_POST['postid'];
			$query="SELECT id FROM users WHERE Email='$email'";
			$result=mysqli_query($connection,$query);
			$row=mysqli_fetch_row($result);
			$response['likes']=$number;
			$query="DELETE FROM likes WHERE post_id='$postid' AND liker_id='$row[0]'";
			if(!$result=mysqli_query($connection,$query))
			{
				die("UNLIKE QUERY FAILED".mysqli_error());	
			
			}
			
			$countquery="SELECT id FROM likes WHERE post_id='$postid'";
			$result3=mysqli_query($connection,$countquery);
			$users=array();
			while($row5=mysqli_fetch_row($result3))
			{
			$users[]=$row5[0];	
			}
			$response=array();
			$number=count($users);	
			$response['likes']=$number;
		

			echo json_encode($response);
			die;
	}

if($_POST['action']=="comment")
{
			$email=$_SESSION['emailname'];
			$query="SELECT id FROM users WHERE Email='$email'";
			$result=mysqli_query($connection,$query);
			$row=mysqli_fetch_row($result);
			$postid=$_POST['userid'];
			$comment=$_POST['comment'];
			
			$query="INSERT INTO comments (post_id,commenter_id,text) VALUES (".$postid.",".$row[0].",'".$comment."')";
			if(!$result=mysqli_query($connection,$query))
			{
				die("COMMENT QUERY FAILED".mysqli_error());	
			}
			echo $comment;
			die;
	
			
			
			
			
	
}




?>
