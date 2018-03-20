<?php
include("Connection/Connect.php");
session_start();
$current_user = $_SESSION['current_user'];
include("Connection/UserInfo.php");
if(empty($current_user))
{
	session_destroy();
	header("refresh:0.0001;url=LoginAccount.php");
}
else
{
?>
<html>
<head>
	<title>Welcome To Migration Session. | Apply Migration Certificate </title>
	<meta name="viewport" content="width=device-width;initial-scale=1.0" />
	<meta name="keywords" content="Sri Venkateshwara University Migration Session and Student Login Page Here. Apply for Migration Here." />
	<meta name="description" content="Here You can apply for migration of MCA Certificate to the Principal. Just Login and Apply easily." />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dez-col.css" />
	<link rel="stylesheet" href="css/dez-nav.css" />
<style>
table tr th,td
{
	border:1px solid black;
	padding:10px;
}
table tr th
{
	width:40%;
}
table tr:hover
{
	background:#F2E7FC;
}
</style>
</head>	
<body>
<?php include("Assets/Header.php"); ?>

<?php include("Assets/NavigationBar.php"); ?>
<?php
$validate = "select email from `apply_migration` where email= '$current_user' ";
$validate_query = mysqli_query($conn,$validate);
$count = mysqli_num_rows($validate_query);
if($count == '1')
{
	header("refresh:0.01;url=Applied.php");
}
?>
<div class="dez-col-100">
	<h1 class="text-center text-purple">Apply Migration Certificate Here</h1>
		<center>
		<form method="post" action="Apply.php" enctype="multipart/form-data" class="student_signup_form">
		
		<fieldset>	
			<legend>Student Details</legend>
			<table style="width:100%;border:1px solid black;" class="apply_table">
				<tr>
					<th>Name of the Student ( As per SSC Only )</th><td><input type="text" name="full_name" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Gender</th><td><select name="gender" class="mig-select" ><option>MALE<option>FEMALE</select></td>
				</tr>
				<tr>
					<th>Admission Number</th><td><input type="text" name="admission_no" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Father's Name</th><td><input type="text" name="father_name" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Name of the College last Studied with Year and Course of Study.<br>Degree / Post Graduate Examination</th><td><input type="text" name="last_college" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Whether Completed the course or Discontinued</th><td><select name="last_college_status" class="mig-select"><option>Completed</option><option>Discontinued</option></select></td>
				</tr>
				<tr>
					<th>Course Or Branch</th><td><input type="text" name="branch" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Month and Year of Admission</th><td><input type="text" name="admission_time" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Month & Year of Qualifying Examination Passed / Discontinued</th><td><input type="text" name="qualification_time" placeholder="Enter Here..."  /></td>
				</tr>
			</table>
		</fieldset>	
		<fieldset>	
			<legend>DD / Challan Details</legend>
				<table style="width:100%;border:1px solid black;" class="apply_table">
				<tr>
					<th>Amount</th><td><input type="text" name="challan_amount" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Number</th><td><input type="text" name="challan_no" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Date</th><td><input type="text" name="challan_date" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Drawn on Bank</th><td><input type="text" name="challan_bank" placeholder="Enter Here..."  /></td>
				</tr>
			</table>
			
		</fieldset>
		<fieldset>	
			<legend>Residential or Personal Details</legend>
				<table style="width:100%;border:1px solid black;" class="apply_table">
				<tr>
					<th>Address For Communication</th><td><textarea name="address"  class="mig-textarea"></textarea></td>
				</tr>
				<tr>
					<th>Permanent Address</th><td><textarea name="permanent_address"  class="mig-textarea"></textarea></td>
				</tr>
				<tr>
					<th>Phone Number</th><td><input type="text" name="phone" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Address of the University Where the Candidate has taken admission</th><td><input type="text" name="university_address" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Signature Of Candidate</th><td><input type="file" name="signature" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Photo Of Candidate</th><td><input type="file" name="photo" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Degree Certificate of Candidate</th><td><input type="file" name="degree" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>First Semester MarkSheet of Candidate</th><td><input type="file" name="first_sem" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Second Semester MarkSheet of Candidate</th><td><input type="file" name="second_sem" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Third Semester MarkSheet of Candidate</th><td><input type="file" name="third_sem" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Fourth Semester MarkSheet of Candidate</th><td><input type="file" name="fourth_sem" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Fifth Semester MarkSheet of Candidate</th><td><input type="file" name="fifth_sem" placeholder="Enter Here..."  /></td>
				</tr>
				<tr>
					<th>Sixth Semester MarkSheet of Candidate</th><td><input type="file" name="sixth_sem" placeholder="Enter Here..."  /></td>
				</tr>
			</table>			
		</fieldset>
		<input type="submit" name="submit" value="Apply For Migration" />
		</center>
		
		</form>
</div>
<?php include("Assets/Footer.php"); ?>
</body>
</html>	
<?php	
}
?>