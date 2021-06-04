<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `status` WHERE `status_id` = '$_REQUEST[status_id]'") or die(mysqli_error());
	header('location:status.php');