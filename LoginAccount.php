<!-- DOCTYPE HTML -->
<html>
<head>
	<title>Welcome To Migration Session. | Student Login | Apply Migration</title>
	<meta name="viewport" content="width=device-width;initial-scale=1.0" />
	<meta name="keywords" content="Sri Venkateshwara University Migration Session and Student Login Page Here. Apply for Migration Here." />
	<meta name="description" content="Here You can apply for migration of MCA Certificate to the Principal. Just Login and Apply easily." />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dez-col.css" />
	<link rel="stylesheet" href="css/dez-nav.css" />
</head>
<body style="background-image:url('img/background.jpeg');width:99%;position:absolute;">
<?php include("Assets/Header.php"); ?>

<?php include("Assets/NavigationBar.php"); ?>

<div class="dez-col-100">
	<h2 class="text-center text-purple">Student Login Here</h2>
	<center>	<form method="post" action="Login.php" class="student_signup_form">
			<input type="email" name="email" placeholder="Enter Valid Email" required />
			<input type="password" name="password" placeholder="Enter Password" required />
			<input type="submit" name="submit" value="Login" />
	</center>	</form>
</div>

<?php include("Assets/Footer.php"); ?>
</body>
</html>