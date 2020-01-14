<?php 
session_start();
if(isset($_SESSION['username'])){
}
else{
	header("location: ?page=login&message=nologin");
}
?>
<html>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>Book your flight today,</h1>
							<p>Enjoy your journey!</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
						<form action="?page=search_result" method="POST" role="form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying from</span>
											<input method="POST" type="text" class="form-control" placeholder="City you are flying from" name="origin" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Flying to</span>
											<input method="POST" type="text" class="form-control" placeholder="City you are flying to" name="destination" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Date</span>
											<input class="form-control" type="date" name="depart" required>
										</div>
									</div>
									<div class="col-md-6">
										<span class="form-label">No. of passengers</span>
										<input type="number" class="form-control" min=1 name="num" placeholder="Enter number of passengers">
									</div>
								<div>	
								<div class="form-btn">
								<input type="submit" class="btn btn-primary submit-btn" name="Search" value="Search" min=1>
								</div><br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</html>
