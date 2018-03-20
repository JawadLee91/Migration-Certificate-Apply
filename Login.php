<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$username = $_POST['email'];
	$password = $_POST['password'];
	
	$Validation = "select * from `student_credentials` where email='$username' and password='$password' ";
	$ValidationQuery = mysqli_query($conn,$Validation);
	$CountValidation = mysqli_num_rows($ValidationQuery);
	
	if($CountValidation == '1')
	{
		session_start();
		$_SESSION['current_user'] = $username;
		header("refresh:0.01;url=ApplyMigration.php");
	}
	else
	{
		echo "Error in Validation, Please create an account";
		header("refresh:3;url=SignUp.php");
	}
}
?>