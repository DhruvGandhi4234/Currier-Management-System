<?php
	require_once 'connect.php';
	if(ISSET($_POST['search'])){
		$courier_number = $_POST['courier_number'];
		$q_check = $conn->query("SELECT * FROM `status` WHERE `courier_number` = '$courier_number'") or die(mysqli_error());
		$v_check = $q_check->num_rows;
		if($v_check == 1){
			echo '
				<script type = "text/javascript">
					window.location = "status.php";
				</script>
			';
		}
		else{
                echo '
                    <script type = "text/javascript">
                        alert("Courier Number Not Exists");
                        window.location = "main.php";
                    </script>
                ';
            }
	}