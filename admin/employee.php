<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Courier Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.jpg" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right">Courier Management System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Update Profile</a></li>
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
		<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-th-large"></span> Dashboard</a></li>
				<li><a href = "branch.php"><span class = "glyphicon glyphicon-home"></span> Branch</a></li>
				<li class="active"><a href = "employee.php"><span class = "glyphicon glyphicon-user"></span> Employee</a></li>
			</ul>
			<br />
		</div>
		<div class = "alert alert-info">Accounts / Employee</div>
			<div class = "modal fade" id = "add_employee" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add new employee</h4>
						</div>
						<form method = "POST" action = "save_employee_query.php" enctype = "multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Username:</label>
									<input type = "text" name = "username" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Name:</label>
									<input type = "text" name = "name" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Contact-Number:</label>
									<input type = "text" name = "contactnumber" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Email:</label>
									<input type = "text" name = "email" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Branch:</label>
									<select name = "branch" required = "required" class = "form-control">
									<?php
										$q_name = $conn->query("SELECT * FROM `branch`") or die(mysqli_error());
										
										while($f_name = $q_name->fetch_array()){
									?>				
															
										<option><?php echo $f_name['name']?></option>
									
									<?php
										}
									?>
									</select>
								</div>
								<div class = "form-group">
									<label>Password:</label>
									<input type = "password" maxlength = "12" required = "required" name = "password" class = "form-control" />
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_employee" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit employee</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "well col-lg-12">
				<button class = "btn btn-success" type = "button" href = "#" data-toggle = "modal" data-target = "#add_employee"><span class = "glyphicon glyphicon-plus"></span> Add New Employee </button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Employee ID</th>
							<th>Username</th>
							<th>Name</th>
							<th>Contact-Number</th>
							<th>Email</th>
							<th>Branch</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q_employee = $conn->query("SELECT * FROM `employee`") or die(mysqli_error());
							while($f_employee = $q_employee->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_employee['employee_id']?></td>
							<td><?php echo $f_employee['username']?></td>
							<td><?php echo $f_employee['name']?></td>
							<td><?php echo $f_employee['contactnumber']?></td>
							<td><?php echo $f_employee['email']?></td>
							<td><?php echo $f_employee['branch']?></td>
							<td><?php echo $f_employee['password']?></td>
							<td><a class = "btn btn-danger remployee_id" name = "<?php echo $f_employee['employee_id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> <a class = "btn btn-warning  eemployee_id" name = "<?php echo $f_employee['employee_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_employee"><span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
			<br />
			<br />	
			<br />	
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">Courier Management System </label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.remployee_id').click(function(){
				$employee_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_employee.php?employee_id=' + $employee_id;
				});
			});
			$('.eemployee_id').click(function(){
				$employee_id = $(this).attr('name');
				$('#edit_query').load('load_edit1.php?employee_id=' + $employee_id);
			});
		});
	</script>
</html>