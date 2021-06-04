<?php
	require_once 'connect.php';
	$q_statusname = $conn->query("SELECT * FROM `status` WHERE `status_id` = '$_SESSION[status_id]'") or die(mysqli_error());
	$f_statusname = $q_statusname->fetch_array();
	$status_name = $f_statusname['courier_number'];