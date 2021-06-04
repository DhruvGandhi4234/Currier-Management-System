<?php
	require_once 'connect.php';
	$name = $_POST['name'];
	$contactnumber = $_POST['contactnumber'];
	$email = $_POST['email'];
	$branch = $_POST['branch'];
	$password = $_POST['password'];
		$conn->query("UPDATE `employee` SET `name` = '$name', `contactnumber` = '$contactnumber', `email` = '$email', `branch` = '$branch', `password` = '$password'  WHERE `employee_id` = '$_REQUEST[employee_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "employee.php";
			</script>
		';