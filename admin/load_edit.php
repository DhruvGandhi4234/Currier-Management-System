<?php
	require_once 'connect.php';
	$q_edit_admin = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
	$f_edit_admin = $q_edit_admin->fetch_array();
?>
<form method = "POST" action = "edit_query.php?admin_id=<?php echo $f_edit_admin['admin_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Username:</label>
			<input type = "text" required = "required" value = "<?php echo $f_edit_admin['username']?>" name = "username" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "password" required = "required" maxlength = "12" value = "<?php echo $f_edit_admin['password']?>" name = "password" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Name:</label>
			<input type = "text" name = "name" value = "<?php echo $f_edit_admin['name']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Email:</label>
			<input type = "text" name = "email" value = "<?php echo $f_edit_admin['email']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Contact-Number:</label>
			<input type = "text" name = "contactnumber" value = "<?php echo htmlentities($f_edit_admin['contactnumber'])?>" required = "required" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	