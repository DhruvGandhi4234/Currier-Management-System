<?php
	require_once 'connect.php';
	$q_edit_employee = $conn->query("SELECT * FROM `employee` WHERE `employee_id` = '$_REQUEST[employee_id]'") or die(mysqli_error());
	$f_edit_employee = $q_edit_employee->fetch_array();
?>
<form method = "POST" action = "edit_employee_query.php?employee_id=<?php echo $f_edit_employee['employee_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Employee ID:</label>
			<input type = "text" name = "username" value = "<?php echo $f_edit_employee['username']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Name:</label>
			<input type = "text" name = "name" value = "<?php echo $f_edit_employee['name']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Contact-Number:</label>
			<input type = "text" name = "contactnumber" value = "<?php echo htmlentities($f_edit_employee['contactnumber'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Email:</label>
			<input type = "text" name = "email" value = "<?php echo htmlentities($f_edit_employee['email'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Branch</label>
			<input type = "text" name = "branch" required = "required" value = "<?php echo $f_edit_employee['branch']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Password:</label>
			<input type = "password" required = "required" maxlength = "12" value = "<?php echo $f_edit_admin['password']?>" name = "password" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	