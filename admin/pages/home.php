	<?php
   session_start();
   include("../config/connection.php");

		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = sha1($_POST['password']);

			$query = "SELECT * FROM `admins` WHERE ausername='$username' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
			if($count >=1){
				$_SESSION['ausername'] = $username;
				header("location:pages/index.php?page=dashboard&message=login-successful");
			}
			else{
				header("location:index.php?message=login-unsuccessful");
			}
		}

 ?>
<br>
	<section id="login-panel">
		<div class="container contents">
			<div class="row">
				<div class="col-md-6" style="margin: auto;">
					<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'login-unsuccessful'):
					?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Sorry!</strong> Wrong username and password! Please check the credentials and try again.
								</div>
					<?php endif; ?>
					<?php if($message == 'logout'):?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Success</strong> Logout successful.
						</div>
					<?php endif; ?>

					<?php if($message == 'nologin'):?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Session expired!</strong> Please login first.
						</div>
					<?php endif; ?>

					<?php endif; ?>	
						
					
					<form method="POST" role="form">
						<legend>Administrator Login</legend>
					
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" id="" name="username" required>
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>
						<input type="checkbox" onclick="myFunction()"> Show Password
					<br> <br>
					
						<input type="submit" name="submit" class="btn btn-primary" value="Login" required>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script>
		function myFunction() {
		var pass = document.getElementById("password");
		if (pass.type === "password") {
			pass.type = "text";
		} else {
			pass.type = "password";
		}
}
		</script>

	<br style="line-height: 15">