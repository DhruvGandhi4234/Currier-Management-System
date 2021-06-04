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
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><?php echo htmlentities($employee_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "employee.php"><i class = "glyphicon glyphicon-user"></i> Update Profile</a></li>
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-th-large"></span> Dashboard</a></li>
				<li><a href = "courier.php"><span class = "glyphicon glyphicon-envelope"></span> Courier</a></li>
				<li><a href = "status.php"><span class = "glyphicon glyphicon-th-list"></span> Courier Status</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Dashboard</div>
		</div>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active col-lg-3"><a> <h3><span class = " pull-right glyphicon glyphicon-envelope"></span></h3>
				<p>Total Courier Pickup</p>
									<?php
										$q_wt = $conn->query("SELECT COUNT(*) FROM `status` WHERE mode ='Courier Arrived at Destination'") or die(mysqli_error());
										
										while($f_wt = $q_wt->fetch_array()){
									?>						
										<?php echo count($f_wt);?>
										<?php
										}
									?>
				<h1>1</h1></a></li>
				<li class = "active col-lg-3"><a> <h3><span class = " pull-right glyphicon glyphicon-envelope"></span></h3>
				<p>Total Courier Shipped</p>
				<h1>1</h1></a></li>
				<li class = "active col-lg-3"><a> <h3><span class = " pull-right glyphicon glyphicon-envelope"></span></h3>
				<p>Total Instrasit Courier</p>
				<h1>1</h1></a></li>
			</ul>
			</br>
			<ul class = "nav nav-pills"> 
				<li class = "active col-lg-3"><a> <h3><span class = " pull-right glyphicon glyphicon-envelope"></span></h3>
				<p>Total Courier Arrived at Destination</p>
				<h1>0</h1></a></li>
				<li class = "active col-lg-3"><a> <h3><span class = " pull-right glyphicon glyphicon-envelope"></span></h3>
				<p>Total Courier out for Delivery</p>
				<h1>1</h1></a></li>
				<li class = "active col-lg-3"><a> <h3><span class = " pull-right glyphicon glyphicon-envelope"></span></h3>
				<p>Total Courier Delivered</p>
				<h1>3</h1></a></li>
			</ul>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">Courier Management System</label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>