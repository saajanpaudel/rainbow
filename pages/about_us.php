
<?php 
include 'config/connection.php';
	$statement = "SELECT * FROM `aboutus`";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));		
 ?>

<div class="row">
<div class="contents col-md-offset-1 col-md-10">
	<?php while($row = $result->fetch_assoc()): ?>
	<h4><?php echo $row['contents']; ?><br><br>
	<?php endwhile; ?>
	</h4>
</div>
</div>