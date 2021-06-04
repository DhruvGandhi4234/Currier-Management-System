<!DOCTYPE html>
<?php
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location: home.php');
	}
?>
<html lang = "eng">
	<head>
		<title>Courier Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.jpg" width = "200px" height = "50px"/>
					<p class = "navbar-text pull-right">Courier Management System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
				<li><a href = "../user/main.php"><span class = "glyphicon glyphicon-envelope"></span> Check your courier status</a></li>
				<li><a href = "../employee/index.php"><span class = "glyphicon glyphicon-user"></span> Employee</a></li>
				<li class = "active"><a href = "index.php"><span class = "glyphicon glyphicon-home"></span> Admin</a></li>
				</ul>
			</div>
		</nav>
		<div class = "container" style = "margin-top:120px;">
			<div class = "row row-centered">
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-4 col-centered">
					<div class = "panel panel-primary">
						<div class = "panel-heading">
							<h4>Admin Login</h4>
						</div>
						<div class = "panel-body">
							<form enctype = "multipart/form-data">
								<div id = "username_warning" class = "form-group">
									<label class = "control-label">Username:</label>
									<input type = "text" id = "username" class = "form-control" />
								</div>
								<div id = "password_warning" class = "form-group">
									<label class = "control-label">Password:</label>
									<input type = "password" maxlength = "12" id = "password" class = "form-control" />
								</div>
								<div id = "result"></div>
								<br />
								<button type = "button" class = "btn btn-primary btn-block" id = "login_admin"><span class = "glyphicon glyphicon-save"></span> Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">Courier Management System</label>
			</div>	
			<section class="ftco-section contact-section bg-light">
				<div class="container">
					<div class="row d-flex contact-info">
					<div class="w-100"></div>
					<div class="col-md-3 d-flex">
						<div class="dbox">
							<p><span>Address:</span>Sabar Institute of Technology for Girls, Tajpur</p>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="dbox">
							<p><span>Phone:</span> <a href="tel://7220817628">+91 722 0817 628</a></p>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="dbox">
							<p><span>Email:</span> <a href="mailto:cmsonline@gmail.com">cmsonline@gmail.com</a></p>
						</div>
					</div>
					<div class="col-md-3 d-flex">
						<div class="dbox">
							<p><span>Website</span> <a href="https://www.cmsonline.com">www.cmsonline.com</a></p>
						</div>
					</div>
					</div>
				</div>	
   			</section>
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>