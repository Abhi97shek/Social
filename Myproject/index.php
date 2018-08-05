<?php
error_reporting(E_ERROR);
session_start();
$email=$_SESSION['emailname'];
$pass=$_SESSION['password'];
if(!empty($email) && !empty($pass))
{
	include "account.php";
}
else
{
	include "login.php";	
}
?>