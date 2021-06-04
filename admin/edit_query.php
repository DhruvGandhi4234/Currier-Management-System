<?php
	require_once 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactnumber = $_POST['contactnumber'];
	$q_checkadmin = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){
			echo '
				<script type = "text/javascript">
					alert("Username already taken");
					window.location = "admin.php";
				</script>
			';
		}else{
			$conn->query("UPDATE `admin` SET `username` = '$username', `password` = '$password', `name` = '$name', `email` = '$email', `contactnumber` = '$contactnumber' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully Edited");
					window.location = "admin.php";
				</script>
			';
		}	