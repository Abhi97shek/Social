<?php
if(isset($_POST['submit']))
{
$minimum=5;
$maximum=10;
$names=array('abhishek','suraj','akhil','sahaj','shivam');	
$username=$_POST['username'];
$password=$_POST['password'];
if(strlen($username)< $minimum)
{
	echo "please enter username greater than 5";
}
else if(strlen($username)> $maximum)
{
	echo "please enter password less than 10";
}
if(in_array($username,$names))
{
	echo "you are allowed";	
	
}
else
{
	echo "you are not allowed";
}



}



?>