<?php include "connect.php";
	if(isset($_POST['submit']))
	{
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$uname=$_POST['username'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		
		
	}
?>
<!doctype html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/signupcss.css" type="text/css" rel="stylesheet">
	</head>
	<body>
     <?php
	
	if(isset($fname)&&empty($fname)|| isset($lname)&&empty($lname)||isset($uname)&&empty($uname)||isset($phone)&&empty($phone)||isset($email)&&empty($email)||isset($pass)&&empty($pass))
		{
			echo "please fill empty boxs";			
		}
		
	else if(isset($fname)&&isset($lname)&&isset($uname)&&isset($phone)&&isset($email)&&isset($pass))
	{		
	
			$checkquery="SELECT id FROM users WHERE Email='$email' OR Username='$uname'";
			$flag=0;
			$user=0;
			$user_meta=0;
			if($result=mysqli_query($connection,$checkquery))
			{
					while($row=mysqli_fetch_assoc($result))
					{
						echo $row[1];	
						$flag++;
					}
			}
			else
			{
					die("failed".mysqli_error($connection));
			}
			if($flag>0)
			{
				
			$error= "USER ALREADY EXIST IN OUR DATABASE";
				
			}
		else{
				$query="INSERT INTO USERS(Username,Email,Password) VALUES('$uname','$email','$pass')";
				$user=1;
				mysqli_query($connection,$query);		
				if(!$insertid=mysqli_insert_id($connection))
				{
					die("error1".mysqli_error($connection));
				}
				else
				{
					$query1="INSERT INTO USERS_META(Firstname,Lastname,Mobile,userid) VALUES('$fname','$lname','$phone','$insertid')"; 
					$user_meta=1;
					if(!mysqli_query($connection,$query1))
					{
					die("error".mysqli_error($connection));	
					}
				}
			
			}
	}
	if($user==1&&$user_meta==1)
	{
		echo "<script>alert('Welcome');
					window.location='index.php';
			</script>";
	
	}
	
	?>
   
    
    <div class="col-lg-5 col-lg-offset-4 form-data">
    <div class="errors">
    	<?php
		echo $error;
		?>
    </div>
	<form method="post" action="" class="form1">
		<div class="form-group row  ">
			<label for="fname" class="col-lg-3 col-form-label control-label">First Name</label>
            <div class=" col-lg-9 vfname">
				<input type="text" id="fname"  class="form-control" name="firstname" placeholder="Enter First Name"/>
            </div>
		</div>
        <div class="form-group row">
			<label for="lname" class="col-lg-3 col-form-label control-label">Last Name</label>
            <div class=" col-lg-9">
				<input type="text" id="lname"  class="form-control" name="lastname" placeholder="Enter Last Name"/>
            </div>
         </div>  
         <div class="form-group row">
			<label for="username" class="col-lg-3 col-form-label control-label">User Name</label>
            <div class=" col-lg-9">
				<input type="text" id="username"  class="form-control" name="username" placeholder="Enter Username"/>
            </div>
         </div>
         <div class="form-group row ">
			<label for="phone" class="col-lg-3 col-form-label control-label">Mobile</label>
            <div class=" col-lg-9 vphone">
				<input type="text" id="phone"  class="form-control" name="phone" placeholder="Enter Number"/>
            </div>
         </div>   
        <div class="form-group row">
			<label for="email" class="col-lg-3 col-form-label control-label">Email</label>
            <div class=" col-lg-9">
				<input type="email" id="email"  class="form-control" name="email" placeholder="Enter Email"/>
            </div>    
         </div>   
		<div class="form-group row">
			<label for="pass" class="col-lg-3 control-label">Password</label>
            <div class="col-lg-9">
				<input type="password" id="pass" class="form-control pass" name="password" placeholder="Enter Password">
                <small class="form-text text-muted">First Letter Should Be Capital.</small>
            </div>    
		 </div>
         <div class="form-group row ">
			<label for="passc" class="col-lg-3 control-label">Confirm Password</label>
            <div class="col-lg-9 vpassc">
				<input type="password" id="passc" class="form-control pass" name="cpassword" placeholder="Confirm Password">
            </div>    
		 </div>
         <div class="form-group text-center">
		 	<input type="submit" value="Sign Up" name="submit" class="btn btn-primary">
		</div>
	</form>
    </div>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/signupjs.js" type="text/javascript"></script>
	</body>
	</html>