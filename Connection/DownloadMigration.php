<?php
include("Connection/UserInfo.php");
$get_migration = "select * from `get_migration` where student_regno = '$current_user_regno' ";
$query_get_migration = mysqli_query($conn,$get_migration);
while($row = mysqli_fetch_array($query_get_migration))
{
	$migration_certificate = $row['certificate'];
	
	if($migration_certificate)
	{
		echo "<h2 class='text-center text-purple'>Migration Certificate Issued Successfully. <a href='DownloadCertificate.php?certificate_name=$migration_certificate'>Click Here To Download</a></h2>";
	}
}
?>