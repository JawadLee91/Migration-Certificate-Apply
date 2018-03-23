<?php
include("Connection/Connect.php");
session_start();
$current_user = $_SESSION['current_user'];
if(isset($_POST['submit']))
{
	$full_name = $_POST['full_name'];
	$gender = $_POST['gender'];
	$admission_no = $_POST['admission_no'];
	$father_name = $_POST['father_name'];
	$last_college = $_POST['last_college'];
	$last_college_status = $_POST['last_college_status'];
	$branch = $_POST['branch'];
	$admission_time = $_POST['admission_time'];
	$qualification_time = $_POST['qualification_time'];
	$challan_amount = $_POST['challan_amount'];
	$challan_no = $_POST['challan_no'];
	$challan_date = $_POST['challan_date'];
	$challan_bank = $_POST['challan_bank'];
	$address = $_POST['address'];
	$permanent_address = $_POST['permanent_address'];
	$phone = $_POST['phone'];
	$university_address = $_POST['university_address'];
	
	$signature = $_FILES['signature']['name'];
	$signature_tmp = $_FILES['signature']['tmp_name'];
	
	$photo = $_FILES['photo']['name'];
	$photo_tmp = $_FILES['photo']['tmp_name'];
	
	$degree = $_FILES['degree']['name'];
	$degree_tmp = $_FILES['degree']['tmp_name'];
	
	$first_sem = $_FILES['first_sem']['name'];
	$first_sem_tmp = $_FILES['first_sem']['tmp_name'];
	
	$second_sem = $_FILES['second_sem']['name'];
	$second_sem_tmp = $_FILES['second_sem']['tmp_name'];
	
	$third_sem = $_FILES['third_sem']['name'];
	$third_sem_tmp = $_FILES['third_sem']['tmp_name'];
	
	$fourth_sem = $_FILES['fourth_sem']['name'];
	$fourth_sem_tmp = $_FILES['fourth_sem']['tmp_name'];
	
	$fifth_sem = $_FILES['fifth_sem']['name'];
	$fifth_sem_tmp = $_FILES['fifth_sem']['tmp_name'];
	
	$sixth_sem = $_FILES['sixth_sem']['name'];
	$sixth_sem_tmp = $_FILES['sixth_sem']['tmp_name'];
	
	$status = '1';
	
	$Store = "StudentUploads/";
	
	$one = move_uploaded_file($signature_tmp,$Store.$signature);
	$two = move_uploaded_file($photo_tmp,$Store.$photo);
	$three = move_uploaded_file($degree_tmp,$Store.$degree);
	$four = move_uploaded_file($first_sem_tmp,$Store.$first_sem);
	$five = move_uploaded_file($second_sem_tmp,$Store.$second_sem);
	$six = move_uploaded_file($third_sem_tmp,$Store.$third_sem);
	$seven = move_uploaded_file($fourth_sem_tmp,$Store.$fourth_sem);
	$eight = move_uploaded_file($fifth_sem_tmp,$Store.$fifth_sem);
	$nine = move_uploaded_file($sixth_sem_tmp,$Store.$sixth_sem);
	
	if($one && $two &&$three && $four && $five && $six && $seven && $eight && $nine)
	{
		$Insert = "insert into `apply_migration`(full_name,gender,admission_no,father_name,last_college,last_college_status,branch,admission_time,qualification_time,challan_amount,challan_no,challan_date,challan_bank,address,permanent_address,phone,university_address,signature,photo,degree,first_sem,second_sem,third_sem,fourth_sem,fifth_sem,sixth_sem,status,email,received) values('$full_name','$gender','$admission_no','$father_name','$last_college','$last_college_status','$branch','$admission_time','$qualification_time','$challan_amount','$challan_no','$challan_date','$challan_bank','$address','$permanent_address','$phone','$university_address','$signature','$photo','$degree','$first_sem','$second_sem','$third_sem','$fourth_sem','$fifth_sem','$sixth_sem','$status','$current_user','Not Received')";
	
		$InsertQuery = mysqli_query($conn,$Insert);
		if($InsertQuery)
		{
			echo "Successfully Inserted Into DataBase";
			header("refresh:2;url=ApplyMigration.php");
		}
		else
		{
			echo "Error in inserting the Data into DataBase";
			header("refresh:2;url=ApplyMigration.php");
		}
	}// End of the uploads IF Statement.
	else
	{
		echo "Not Working";
		header("refresh:2;url=ApplyMigration.php");
	}
}// End of the Main IF Statement.
?>