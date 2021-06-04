<?php
	require_once 'connect.php';
	$q_edit_branch = $conn->query("SELECT * FROM `branch` WHERE `branch_id` = '$_REQUEST[branch_id]'") or die(mysqli_error());
	$f_edit_branch = $q_edit_branch->fetch_array();
?>
<form method = "POST" action = "edit_branch_query.php?branch_id=<?php echo $f_edit_branch['branch_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Branch Name:</label>
			<input type = "text" name = "name" value = "<?php echo $f_edit_branch['name']?>" required = "required" class = "form-control" />
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
			<label>Branch Address:</label>
			<input type = "text" name = "address" value = "<?php echo $f_edit_branch['address']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>City</label>
			<input type = "text" name = "city" required = "required" value = "<?php echo $f_edit_branch['city']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Pin-code:</label>
			<input type = "text" name = "pincode" value = "<?php echo htmlentities($f_edit_branch['pincode'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>State</label>
			<input type = "text" name = "state" required = "required" value = "<?php echo $f_edit_branch['state']?>" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Country</label>
			<input type = "text" name = "country" required = "required" value = "<?php echo $f_edit_branch['country']?>" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	