<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Courier Management System </title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right">Courier Management System </p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><?php echo htmlentities($employee_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Dashboard</a></li>
				<li><a href = "courier.php"><span class = "glyphicon glyphicon-envelope"></span> Courier</a></li>
				<li><a href = "status.php"><span class = "glyphicon glyphicon-th-list"></span> Courier Status</a></li>
			</ul>
			<br />
			<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
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
									<label>Branch</label>
									<input type = "text" name = "branch" required = "required" class = "form-control" />
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
			<div class = "alert alert-info">Profile</div>
			<div class = "well col-lg-12">
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info">
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
							<td> <a class = "btn btn-warning  eemployee_id" name = "<?php echo $f_employee['employee_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_employee"><span class = "glyphicon glyphicon-edit"></span></a></td>
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			<br />
			<br />	
			<br />		
			</div>
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
			$('.eemployee_id').click(function(){
				$employee_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?employee_id=' + $employee_id);
			});
		});
	</script>
</html>