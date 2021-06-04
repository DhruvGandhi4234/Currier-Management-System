<?php
	require_once 'connect.php';
	$q_employeename = $conn->query("SELECT * FROM `employee` WHERE `employee_id` = '$_SESSION[employee_id]'") or die(mysqli_error());
	$f_employeename = $q_employeename->fetch_array();
	$employee_name = $f_employeename['name'];