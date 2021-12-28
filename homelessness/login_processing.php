<?php
include("init.php");
session_start();
ob_start();

if(isset($_POST['sign_in']))
{
$username = $_POST['username'];
$password =$_POST['password'];

// echo "username: $username";
$login = new login();
$condition = "username='$username' and password='$password'";
$login->selectAllWhereG($condition);

	if($login->username != "")
	{
		//login successfull
		$_SESSION["user_obj"] = $login;
		$_SESSION["user"] = $username;
		// die(var_dump($login));
		header("Location:index.php");
	}
	
	else{
		//login failed!
		// echo "failed";
		header("Location:login.php?error=true");
	}
}
 






