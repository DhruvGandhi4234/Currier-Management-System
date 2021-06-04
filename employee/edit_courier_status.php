<?php
	require_once 'connect.php';
		$courier_number = $_POST['courier_number'];
		$mode = $_POST['mode'];
		$delivery_date = $_POST['delivery_date'];
		$q_check = $conn->query("SELECT * FROM `courier` WHERE `courier_number` = '$courier_number'") or die(mysqli_error());
		$v_check = $q_check->num_rows;
		if($v_check == 0){
			echo '
				<script type = "text/javascript">
					alert("Courier Number Not Exists");
					window.location = "status.php";
				</script>
			';
		}
		else{$conn->query("UPDATE `status` SET `courier_number` = '$courier_number', `mode` = '$mode', `delivery_date` = '$delivery_date' WHERE `status_id` = '$_REQUEST[status_id]'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully Edited");
					window.location = "status.php";
				</script>
			';	
		}