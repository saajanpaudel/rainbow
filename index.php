<?php 
error_reporting(0);
session_start();
$username=$_SESSION['username'];
include 'config/connection.php';
 ?>

<!DOCTYPE html>
<html>

<script type="text/javascript" src="jquery/jQuery.js"></script>
<script type="text/javascript" src="jquery/jQuery1.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/animate.css">
<link rel="stylesheet" type="text/css" href="styles/lightbox.min.css">
<script type="text/javascript" src="jquery/lightbox-plus-jquery.min.js"></script>

<head>
		<title>Rainbow Airlines</title>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
  			<?php if( isset($_SESSION['username']))
{
	echo "<a href='activities/logout.php'>Logout</a>";
}

else {
	echo "  <a href='?page=login'>Login</a>
  <a href='?page=signup'>Signup</a>";
}
?>
  <a href="?page=all_flights">View all flights</a>
  <a href="?page=book_flight">Fly with us!</a>
  <a href="?page=about_us">About us</a>
  <a href="?page=contact_us">Contact us</a>
  <a href="?page=gallery">Image gallery</a>
  <a href="?page=feedback">User feedback</a>
  <a href="?page=explore_more">Explore more</a>
</div>

<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container headcontainer">
		<ul class="nav navbar-nav pull-left">			
			<li><a class="lianav" onclick="openNav()">&#9776;</a></li>			
		</ul>
		<a href="?page=home"><img src="imgs/ralogo.png" class="logo" height="50px"></a>
		<ul class="nav navbar-nav pull-right">
			<?php if( isset($_SESSION['username']))
{
	echo "<li><a href='activities/logout.php'>Logout $username</a></li>";
}

else {
	echo "<li><a href='?page=login'>Login</a></li>
  		<li><a href='?page=signup'>Signup</a></li>";
}
?>
  		</ul>
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
			<h4 class="copyright-heading" style="font-family: poppins">Copyright © Rainbow Airlines 2019. All rights reserved!</h4>
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

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "185px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
}
</script>

</html>