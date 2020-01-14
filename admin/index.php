<?php 
session_start();
	if(isset ($_SESSION['ausername'])){
		header('location:pages/index.php?page=dashboard');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rainbow Airlines|Admin Panel</title>
	<script type="text/javascript" src="../jquery/jQuery.js"></script>
	<script type="text/javascript" src="../jquery/jQuery1.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" type="text/css" href="../styles/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/admin-style.css">

<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container headcontainer">
		<ul class="nav navbar-nav pull-left">
			
			
			<li>
				<a href="?page=home">Admin Home</a>
			</li>
			
		</ul>
		<a href="?page=home"><img src="../imgs/ralogo.png" class="logo" height="50px"></a>
	</div>
</nav>
</header>
</head>

<body>
<section id="content">
	<div class="">
		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				include 'pages/'.$page.'.php';
			}
			else{
				include 'pages/home.php';
			}
		 ?>
	</div>
</section>
</body>

<footer>
<nav class="navbar navbar-default bottomnav" role="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h4 class="copyright-heading">Copyright © Rainbow Airlines 2019. All rights reserved!</h4>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
				<a href="https://www.twitter.com/" class="fa fa-twitter"></a>
				<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			</div>
		</div>
	</div>
</nav>
</footer>

</html>
