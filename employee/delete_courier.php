<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `courier` WHERE `courier_id` = '$_REQUEST[courier_id]'") or die(mysqli_error());
	header('location:courier.php');