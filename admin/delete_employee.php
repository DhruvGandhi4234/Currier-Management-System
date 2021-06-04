<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `employee` WHERE `employee_id` = '$_REQUEST[employee_id]'") or die(mysqli_error());
	header('location:employee.php');