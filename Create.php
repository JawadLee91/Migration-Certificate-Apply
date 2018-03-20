<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$full_name = $_POST['full_name'];
	$reg_no = $_POST['reg_no'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	
	$Create = "insert into `student_credentials`(full_name,reg_no,email,password,mobile) values('$full_name','$reg_no','$email','$password','$mobile')";
	$CreateQuery = mysqli_query($conn,$Create);
	if($CreateQuery)
	{
		Echo "Account Created Successfully";
		header("refresh:1;url=LoginAccount.php");
	}
	else
	{
		echo "Account Already Exist or Error occurred in Creating account";
		header("refresh:3;url=LoginAccount.php");
	}
}
?>