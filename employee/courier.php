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
					<img src = "images/logo.jpg" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right">Courier Management System </p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><?php echo htmlentities($employee_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
						<li><a href = "employee.php"><span class = "glyphicon glyphicon-user"></span> Update Profile</a></li>
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-th-large"></span> Dashboard</a></li>
				<li class = "active"><a href = "courier.php"><span class = "glyphicon glyphicon-envelope"></span> Courier</a></li>
				<li><a href = "status.php"><span class = "glyphicon glyphicon-th-list"></span> Courier Status</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Courier</div>
			<div class = "modal fade" id = "add_courier" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add new courier</h4>
						</div>
						<form method = "POST" action = "save_courier_query.php" enctype = "multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Courier Number:</label>
									<input type = "text" name = "courier_number" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Sender Branch:</label>
									<select name = "senderbranch" required = "required" class = "form-control">
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
									<label>Sender Name:</label>
									<input type = "text" name = "sendername" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Sender Contact Number:</label>
									<input type = "text" name = "sendercontact" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Sender Addtess:</label>
									<input type = "text" name = "senderaddress" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Sender City:</label>
									<input type = "text" name = "sendercity" required = "required" class = "form-control">
								</div>
								<div class = "form-group">
									<label>Sender Pincode:</label>
									<input type = "text" name = "senderpincode" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Sender State:</label>
									<input type = "text" name = "senderstate" required = "required" class = "form-control">
								</div>
								<div class = "form-group">
									<label>Sender Country:</label>
									<input type = "text" name = "sendercountry" required = "required" class = "form-control">
								</div>
								<div class = "form-group">
									<label>Recipient Branch:</label>
									<select name = "recipientbranch" required = "required" class = "form-control">
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
									<label>Recipient Name:</label>
									<input type = "text" name = "recipientname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Recipient Contact Number:</label>
									<input type = "text" name = "recipientcontact" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Recipient Addtess:</label>
									<input type = "text" name = "recipientaddress" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Recipient City:</label>
									<input type = "text" name = "recipientcity" required = "required" class = "form-control">
								</div>
								<div class = "form-group">
									<label>Recipient Pincode:</label>
									<input type = "text" name = "recipientpincode" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Recipient State:</label>
									<input type = "text" name = "recipientstate" required = "required" class = "form-control">
								</div>
								<div class = "form-group">
									<label>Recipient Country:</label>
									<input type = "text" name = "recipientcountry" required = "required" class = "form-control">
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
			<div class = "modal fade" id = "edit_courier" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit courier</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "well col-lg-12">
				<button class = "btn btn-success" type = "button" href = "#" data-toggle = "modal" data-target = "#add_courier"><span class = "glyphicon glyphicon-plus"></span> Add New Courier</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Courier ID</th>
							<th>Courier Number</th>
							<th>Sender Branch</th>
							<th>Sender Name</th>
							<th>Sender Contact Number</th>
							<th>Sender Address</th>
							<th>Sender City</th>
							<th>Sender Pincode</th>
							<th>Sender State</th>
							<th>Sender Country</th>
							<th>Recipient Branch</th>
							<th>Recipient Name</th>
							<th>Recipient Contact Number</th>
							<th>Recipient Address</th>
							<th>Recipient City</th>
							<th>Recipient Pincode</th>
							<th>Recipient State</th>
							<th>Recipient Country</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q_courier = $conn->query("SELECT * FROM `courier`") or die(mysqli_error());
							while($f_courier = $q_courier->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_courier['courier_id']?></td>
							<td><?php echo $f_courier['courier_number']?></td>
							<td><?php echo $f_courier['senderbranch']?></td>
							<td><?php echo $f_courier['sendername']?></td>
							<td><?php echo $f_courier['sendercontact']?></td>
							<td><?php echo $f_courier['senderaddress']?></td>
							<td><?php echo $f_courier['sendercity']?></td>
							<td><?php echo $f_courier['senderpincode']?></td>
							<td><?php echo $f_courier['senderstate']?></td>
							<td><?php echo $f_courier['sendercountry']?></td>
							<td><?php echo $f_courier['recipientbranch']?></td>
							<td><?php echo $f_courier['recipientname']?></td>
							<td><?php echo $f_courier['recipientcontact']?></td>
							<td><?php echo $f_courier['recipientaddress']?></td>
							<td><?php echo $f_courier['recipientcity']?></td>
							<td><?php echo $f_courier['recipientpincode']?></td>
							<td><?php echo $f_courier['recipientstate']?></td>
							<td><?php echo $f_courier['recipientcountry']?></td>
							<td><a class = "btn btn-danger rcourier_id" name = "<?php echo $f_courier['courier_id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> <a class = "btn btn-warning  ecourier_id" name = "<?php echo $f_courier['courier_id']?>" href = "#" data-toggle = "modal" data-target = "#edit_courier"><span class = "glyphicon glyphicon-edit"></span></a></td>
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
			$('.rcourier_id').click(function(){
				$courier_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_courier.php?courier_id=' + $courier_id;
				});
			});
			$('.ecourier_id').click(function(){
				$courier_id = $(this).attr('name');
				$('#edit_query').load('load_edit1.php?courier_id=' + $courier_id);
			});
		});
	</script>
</html>