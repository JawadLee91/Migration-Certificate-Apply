<?php
include("Connection/Connect.php");
if(isset($_POST['submit']))
{
	$student_regno = $_POST['reg_no'];
	
	$certificate = $_FILES['certificate']['name'];
	$tmp_certificate = $_FILES['certificate']['tmp_name'];
	
	$current_date = Date("ymdhis");
	
	$store = "PrincipalUploads/";
	$final_name = $current_date.$certificate;
	$upload_file = move_uploaded_file($tmp_certificate,$store.$final_name);
	if($upload_file)
	{
		$insert = "insert into `get_migration`(student_regno,certificate) values('$student_regno','$final_name')";
		$insert_query = mysqli_query($conn,$insert);
		if($insert_query)
		{
			echo "Inserted The Image and also uploaded in the Directory";
			header("refresh:1;url=IssueMigration.php");
		}
		else
		{
			echo "Error in inserting the data or Already Issued the Migration Certificate";
			header("refresh:1;url=IssueMigration.php");
		}
	}
	else
	{
		echo "Error in Uploading the data in the Directory";
		header("refresh:1;url=IssueMigration.php");
	}
	
}
?>