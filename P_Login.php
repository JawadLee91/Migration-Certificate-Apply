<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$username = $_POST['email'];
	$password = $_POST['password'];
	
	if($username == 'principal@admin.com' && $password == 'PrincipalAdmin')
	{
		session_start();
		$_SESSION['current_principal'] = $username;
		header("refresh:0.01;url=IssueMigration.php");
	}
	else
	{
		echo "Error in Validation, Please enter Correctly.";
		header("refresh:3;url=PrincipalLogin.php");
	}
}
?>