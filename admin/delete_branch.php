<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `branch` WHERE `branch_id` = '$_REQUEST[branch_id]'") or die(mysqli_error());
	header('location:branch.php');