<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$db['db_host']='localhost';
	$db['db_user']='root';
	$db['db_pass']='';
	$db['db_name']='social';

	foreach( $db as $key => $value)
	{
	
	define(strtoupper($key),$value);
	
	}

	$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if($connection)
	{
	echo "Yes it is working";
	}
	else
	{
	die("database connection failed");
	}
	$query="INSERT INTO login(username,password) VALUES('$username','$password')";
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
<form method="post" action="connection.php">
	<div class="form-data">
    	<label for="user">USERNAME</label>
    	<input type="text" class="user" name="username"/>
    </div>
    <div class="form-data">
    	<label for="pass">PASSWORD</label>
        <input type="password" class="pass" name="password">
     </div>
     <input type="submit" name="submit" class="btn btn-primary">
    
</form>
</body>
</html>