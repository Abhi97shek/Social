<?php include "connect.php";
	if(isset($_POST['submit']))
	{
	$email=$_POST['emailname'];
	$pass=$_POST['password'];
	 $check="SELECT Email,Password FROM users Where Email='$email' AND Password='$pass'";
	if($result=mysqli_query($connection,$check))
	{
		
		$row=mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result)>0)
		{
			
			$_SESSION['emailname']=$email;
			$_SESSION['password']=$pass;	
			echo "<script>window.location='index.php'</script>";	
		}
		else
		{
			echo "<script>alert('Email Or Password Incorrect')</script>";
		}
					
	}	
	}

	
?>
	<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Birdify</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/formcss.css" type="text/css" rel="stylesheet">
	</head>
	<body>
    <div class="col-lg-4 col-lg-offset-4 form-data">
	<form method="post" action="">
		<div class="form-group">
			<label for="user">Email address</label>
			<input type="email" id="user"  class="form-control" name="emailname" placeholder="Enter Email"/>
		</div>
		<div class="form-group">
			<label for="pass">Password</label>
			<input type="password" id="pass" class="form-control" name="password" placeholder="Enter Password">
		 </div>
         <div class="form-group buttons">
		 <input type="submit" value="Sign In" name="submit" class="btn btn-primary signin">
          <a href="signup.php" class="btn btn-primary signup">Sign Up</a>
         
		</div>
	</form>
    </div>
	</body>
	</html>