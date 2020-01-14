						
<div class="row">
	
			<div class="col-md-6 col-md-offset-1 contents form">

			<div class="form-group"><h3>Customers signup</h3><hr>
			<?php
				if(isset($_GET['message'])):
						$message=$_GET['message'];
						?>
						<?php
						if($message=="success"):
				 ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Signup successful,</strong> try loging in!
								</div>
				 			
				 <?php endif; ?>
				 <?php endif; ?>

				 <?php
				if(isset($_GET['message'])):
						$message=$_GET['message'];
						?>
						<?php
						if($message=="failed"):
				 ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Sorry!</strong> Something went wrong.
								</div>
				<?php endif; ?>
				<?php endif; ?><br>
			<div class=form1>
				<form method="POST" role="form">

						<label>Full name</label>
						<input type="text" class="form-control" name="name" required="true"><br>

						<label>Address</label>
						<input type="text" class="form-control" name="address" required="true"><br>

						<label>Email address</label>
						<input type="email" class="form-control" name="email" required="true"><br>

						<label>Phone number (without country code)</label>
						<input type="text" class="form-control" name="phone" minlength="10" maxlength="10" required="true"><br>

						<label>Username</label>
						<input type="text" class="form-control" name="username" required="true"><br>

						<label>Password</label>
						<input type="password" class="form-control" id="password" name="password" required="true"><br>
						<input type="checkbox" onclick="showPass()"> Show Password <br><br>
						<input type="submit" class="btn btn-primary" name="signup" value="Signup">
						<br><br>
						<a href="?page=login">Already a customer? Login here!</a>
	</form>

<?php
if(isset($_POST['signup']))
	{
		include'config/connection.php';
		$name=$_POST['name'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$username=$_POST['username'];
		$password=sha1($_POST['password']);
		$statement="INSERT INTO customers (name, address, email, phone, username, password) VALUES ('".$name."', '".$address."', '".$email."', '".$phone."', '".$username."', '".$password."')";
		$query=mysqli_query($con, $statement) or die(mysqli_error($con));
	
		if(!$query){
		header("location: index.php?page=signup&message=failed");
	}

	else{
		header("location: index.php?page=signup&message=success");	
	}
	}
 ?>
</div>
</div>
</div>

<script>
		function showPass() {
		var pass = document.getElementById("password");
		if (pass.type === "password") {
			pass.type = "text";
		} else {
			pass.type = "password";
		}
}
		</script>
