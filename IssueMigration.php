<?php
include("Connection/Connect.php");
session_start();
$current_principal = $_SESSION['current_principal'];
if(empty($current_principal))
{
	session_destroy();
	header("refresh:0.001;url=PrincipalLogin.php");
}	
else
{
?>
<html>
<head>
	<title>Welcome Principal | Issue Migration Certificate.</title>
	<meta name="viewport" content="width=device-width;initial-scale=1.0" />
	<meta name="keywords" content="Sri Venkateshwara University Migration Session and Student Login Page Here. Apply for Migration Here." />
	<meta name="description" content="Here You can apply for migration of MCA Certificate to the Principal. Just Login and Apply easily." />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dez-col.css" />
	<link rel="stylesheet" href="css/dez-nav.css" />
</head>
<body>
<?php include("Assets/Header.php"); ?>
<?php include("Assets/NavigationBar.php"); ?>
<div class="dez-col-100">
	<h1 class="text-center text-purple" >Issue Migration Certificate <a href="Connection/Logout.php">( LOGOUT )</a></h1>
	<center><form method="post" action="Issue.php" enctype="multipart/form-data" class="student_signup_form">
		<input type="text" name="reg_no" placeholder="Student Register No.." required />
		<input type="file" name="certificate" required />
		<input type="submit" name="submit" Value="Issue Certificate" />
	</center></form>
</div>
</body>
</html>
<?php
}
?>
