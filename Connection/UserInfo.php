<?php
include("Connection/Connect.php");
$user_info = "select * from `student_credentials` where email = '$current_user' ";
$query_user_info = mysqli_query($conn,$user_info);
while($row = mysqli_fetch_array($query_user_info))
{
	$current_user_fullname = $row['full_name'];
	$current_user_regno = $row['reg_no'];
	$current_user_email = $row['email'];
	$current_user_mobile = $row['mobile'];
}
?>