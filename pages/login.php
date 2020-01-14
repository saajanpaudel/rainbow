<?php
		if(isset($_POST['login'])){
			include'config/connection.php';
			$username = $_POST['username'];
			$password = sha1($_POST['password']);

			$query = "SELECT * FROM `customers` WHERE username='".$username."' and password='".$password."'";
 
			$result = mysqli_query($con, $query) or die(mysqli_error($con));
			$count = mysqli_num_rows($result);
			if($count >= 1){
				$_SESSION['username'] = $username;
				header("location: index.php?message=success");
			}
			else{
				header("location: index.php?page=login&message=failed");
			}
		}

 ?>

<div class="row">
			<div class="col-md-6 col-md-offset-1 contents">
				<?php
					if(isset($_GET['message'])):
						$message = $_GET['message'];
							if($message == 'failed'):
								?>
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<strong>Sorry!</strong> Wrong username and password.
									</div>
									<?php elseif($message == 'nologin'):
								?>
									<div class="alert alert-info">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<strong>Please login to continue</strong>
									</div>
			<?php
			endif; 
		endif;
?>
				<h3>Customers login</h3><hr><br>
				<form method="POST" role="form">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" id="password" required>
					</div>
					<input type="checkbox" onclick="myFunction()"> Show Password
					<br> <br>
					<input type="submit" class="btn btn-primary" name="login" value="Login">
				</form>
				<br><a href="?page=signup">New customer? Signup first!</a>
			</div>
		</div>
<br style="line-height:9;">


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