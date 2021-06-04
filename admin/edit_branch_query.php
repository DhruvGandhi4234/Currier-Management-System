<?php
	require_once 'connect.php';
	$branch_id = $_POST['branch_id'];
	$name = $_POST['name'];
	$contactnumber = $_POST['contactnumber'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$country = $_POST['country'];
		$conn->query("UPDATE `branch` SET `branch_id` = '$branch_id', `name` = '$name', `contactnumber` = '$contactnumber', `email` = '$email', `address` = '$address', `city` = '$city', `pincode` = '$pincode', `state` = '$state', `country` = '$country'  WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "branch.php";
			</script>
		';	