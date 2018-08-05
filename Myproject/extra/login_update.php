	<?php
	ini_set('display_errors',0);
	$db_host='localhost';
	$db_user='root';
	$db_pass='';
	$db_dbname='social';
	$connection=mysqli_connect($db_host,$db_user,$db_pass,$db_dbname);
	if(!$connection)
	{
	die("database connection failed");
	}
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$uid=$_POST['id'];
		
		$query="UPDATE login SET username='$username',password='$password' where id='$uid'";
		$result=mysqli_query($connection,$query);
		if(!$result)
		{
			die("query failed".mysqli_error());
		}
	}
?>
	<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<link href="bootstrap.min.css" type="text/css" rel="stylesheet">
	</head>
	<body>
	<form method="post" action="">
		<div class="form-data">
			<label for="user">USERNAME</label>
			<input type="text" id="user" name="username"/>
		</div>
		<div class="form-data">
			<label for="pass">PASSWORD</label>
			<input type="password" class="pass" name="password">
		 </div>
		 <div class="form-data">
		 <select name="id" id="">
         <?php
		 	$query1="SELECT * FROM login";
			$result1=mysqli_query($connection,$query1);
		 	 while($row=mysqli_fetch_assoc($result1))
		{
			$id=$row['id'];
		 echo "<option>$id</option>";		
			
		}
		 
		 
		 
		 ?>
       
		 </select>
		 
		 
		 </div>
		 <input type="submit" value="UPDATE" name="submit" class="btn btn-primary">
		
	</form>
	</body>
	</html>