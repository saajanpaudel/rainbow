
<?php 
include 'config/connection.php';
	$statement = "SELECT * FROM `exploremore`";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));		
 ?>

<div class="row">
<div class="contents col-md-offset-1 col-md-10">
	<?php while($row = $result->fetch_assoc()): ?>
	<h4><?php echo $row['contents']; ?><br><br>
	<?php endwhile; ?>
	Furthermore, you can view about VISIT NEPAL 2020 and it's attractions from <a href="https://www.nepalvisit2020.com/">here</a>.
	</h4>
</div>
</div>


