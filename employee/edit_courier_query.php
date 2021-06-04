<?php
	require_once 'connect.php';
		$courier_number = $_POST['courier_number'];
		$senderbranch = $_POST['senderbranch'];
		$sendername = $_POST['sendername'];
		$sendercontact = $_POST['sendercontact'];
		$senderaddress = $_POST['senderaddress'];
		$sendercity = $_POST['sendercity'];
		$senderpincode = $_POST['senderpincode'];
		$senderstate = $_POST['senderstate'];
		$sendercountry = $_POST['sendercountry'];
		$recipientbranch = $_POST['recipientbranch'];
		$recipientname = $_POST['recipientname'];
		$recipientcontact = $_POST['recipientcontact'];
		$recipientaddress = $_POST['recipientaddress'];
		$recipientcity = $_POST['recipientcity'];
		$recipientpincode = $_POST['recipientpincode'];
		$recipientstate = $_POST['recipientstate'];
		$recipientcountry = $_POST['recipientcountry'];
		$conn->query("UPDATE `courier` SET `courier_number` = '$courier_number', `senderbranch` = '$senderbranch', `sendername` = '$sendername', `sendercontact` = '$sendercontact', `senderaddress` = '$senderaddress', `sendercity` = '$sendercity', `senderpincode` = '$senderpincode', `senderstate` = '$senderstate', `sendercountry` = '$sendercountry', `recipientbranch` = '$recipientbranch', `recipientname` = '$recipientname', `recipientcontact` = '$recipientcontact', `recipientaddress` = '$recipientaddress', `recipientcity` = '$recipientcity', `recipientpincode` = '$recipientpincode', `recipientstate` = '$recipientstate', `recipientcountry` = '$recipientcountry' WHERE `courier_id` = '$_REQUEST[courier_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "courier.php";
			</script>
		';	