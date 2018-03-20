<?php
$current_user = $_SESSION['current_user'];
?>

<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dez-col.css" />
	<link rel="stylesheet" href="css/dez-nav.css" />

</head>
<body>
<div class="dez-col-100">
	<table class="information">
		<?php
			$get_details = "select * from `apply_migration` where email = '$current_user' ";
			$query_get_details = mysqli_query($conn,$get_details);
			
			while($row = mysqli_fetch_array($query_get_details))
			{
				$full_name = $row['full_name'];
				$gender = $row['gender'];
				$admission_no = $row['admission_no'];
				$father_name = $row['father_name'];
				$last_college = $row['last_college'];
				$last_college_status = $row['last_college_status'];
				$branch = $row['branch'];
				$admission_time = $row['admission_time'];
				$qualification_time = $row['qualification_time'];
				$challan_amount = $row['challan_amount'];
				$challan_no = $row['challan_no'];
				$challan_date = $row['challan_date'];
				$challan_bank = $row['challan_bank'];
				$address = $row['address'];
				$permanent_address = $row['permanent_address'];
				$phone = $row['phone'];
				$university_address = $row['university_address'];
				$signature = $row['signature'];
				$photo = $row['photo'];
				$degree = $row['degree'];
				$first_sem = $row['first_sem'];
				$second_sem = $row['second_sem'];
				$third_sem = $row['third_sem'];
				$fourth_sem = $row['fourth_sem'];
				$fifth_sem = $row['fifth_sem'];
				$sixth_sem = $row['sixth_sem'];
				
				echo "
					<tr><th>Full Name</th><td>$full_name</td></tr>
					<tr><th>Gender</th><td>$gender</td></tr>
					<tr><th>Admission Number</th><td>$admission_no</td></tr>
					<tr><th>Father's name</th><td>$father_name</td></tr>
					<tr><th>Previous College Name</th><td>$last_college</td></tr>
					<tr><th>Previous College Status</th><td>$last_college_status</td></tr>
					<tr><th>Branch Or Course</th><td>$branch</td></tr>
					<tr><th>Admission Year and Month</th><td>$admission_time</td></tr>
					<tr><th>Qualification Yeam and Month</th><td>$qualification_time</td></tr>
					<tr><th>Challan Amount</th><td>$challan_amount</td></tr>
					<tr><th>Challan Number</th><td>$challan_no</td></tr>
					<tr><th>Challan Date</th><td>$challan_date</td></tr>
					<tr><th>Challan Of Bank</th><td>$challan_bank</td></tr>
					<tr><th>Address</th><td> nl2br($$address) </td></tr>
					<tr><th>Permanent Address</th><td>$permanent_address</td></tr>
					<tr><th>Mobile Number</th><td>$phone</td></tr>
					<tr><th>University Address</th><td>$university_address</td></tr>
					<tr><th>Signature of Candidate</th><td><a href='View.php?name=$signature'><img style='width:250px;height:150px;' src='StudentUploads/$signature' /></a></td></tr>
					<tr><th>Photo Of Candidate</th><td><a href='View.php?name=$photo'><img style='width:250px;height:150px;' src='StudentUploads/$photo' /></a></td></tr>
					<tr><th>Degree Of Candidate</th><td><a href='View.php?name=$degree'><img style='width:250px;height:150px;' src='StudentUploads/$degree' /></a></td></tr>
					<tr><th>First Semister Mark Sheet</th><td><a href='View.php?name=$first_sem'><img style='width:250px;height:150px;' src='StudentUploads/$first_sem' /></a></td></tr>
					<tr><th>Second Semister Mark Sheet</th><td><a href='View.php?name=$second_sem'><img style='width:250px;height:150px;' src='StudentUploads/$second_sem' /></a></td></tr>
					<tr><th>Third Semister Mark Sheet</th><td><a href='View.php?name=$third_sem'><img style='width:250px;height:150px;' src='StudentUploads/$third_sem' /></a></td></tr>
					<tr><th>Fourth Semister Mark Sheet</th><td><a href='View.php?name=$fourth_sem'><img style='width:250px;height:150px;' src='StudentUploads/$fourth_sem' /></a></td></tr>
					<tr><th>Fifth Semister Mark Sheet</th><td><a href='View.php?name=$fifth_sem'><img style='width:250px;height:150px;' src='StudentUploads/$fifth_sem' /></a></td></tr>
					<tr><th>Sixth Semister Mark Sheet</th><td><a href='View.php?name=$sixth_sem'><img style='width:250px;height:150px;' src='StudentUploads/$sixth_sem' /></a></td></tr>
				
				";
			}
		?>
	</table>
</div>
</body>
</html>