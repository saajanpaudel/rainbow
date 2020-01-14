
<?php 
	if(isset($_POST['contact']))
	{
		include'config/connection.php';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$statement="INSERT INTO contactus (name, message, email) VALUES ('$name', '".$message."', '".$email."')";
		$query=mysqli_query($con, $statement) or die(mysqli_error($con));
	
		if(!$query){
		header("location: index.php?page=contact_us&message=failed");
	}

	else{
		header("location: index.php?page=contact_us&message=success");	
	}

	}
 ?>

<div class="row contents">
			<div class="col-md-offset-1 col-md-8">
				<h2>Feel free to leave us a message!</h2>
				<form method="POST" role="form">
					<div class="form-group"> <br>
						<input type="text" class="form-control" name="name" placeholder="Enter your name here" required="true">
					</div><br>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Enter your email address here" required="true">
					</div><br>
					<div class="form-group">
						<textarea class="form-control" name="message" placeholder="Enter your message here" required="true"></textarea><br>
					</div>
					<input type="submit" class="btn btn-primary" name="contact" value="Send">
				</form>
				 </div>
		</div> <br>

				<?php
				if(isset($_GET['message'])):
						$message=$_GET['message'];
						if($message=="success"):
				 ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Thanks!</strong> Your message has been received.
								</div>
				 			
				 <?php endif; ?>

				 <?php
				if(isset($_GET['message'])):
						$message=$_GET['message'];
						if($message=="failed"):
				 ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Sorry!</strong> Something went wrong.
								</div>
				 			
				 <?php endif; ?>

				 <?php endif; ?>

				 <?php endif; ?>

				 <br style="line-height: 13">
