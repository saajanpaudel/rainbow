<?php 
include 'config/connection.php';
	$origin = $_POST['origin'];
	$destination = $_POST['destination'];
	$departdate=$_POST['depart'];
	$num=$_POST['num'];
	$query = "SELECT * FROM `flights` WHERE origin='$origin' and destination='$destination' and departdate='$departdate' and availableseats>='$num'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$count = mysqli_num_rows($result);
 ?>
 <div class="contents"></div>
 <a href="?page=book_flight" class="btn btn-primary">Back</a><br><br>
 <?php 	if($count == 0){ echo "<p class='alert alert-danger'>No results found</p>";}?>
			<table class="table table-hover">
			<thead>
				<tr>
					<th>I.D.</th>
					<th>Origin</th>
					<th>Departure Airport</th>
					<th>Destination</th>
					<th>Landing Airport</th>
					<th>Flight name</th>
					<th>Total seats</th>
					<th>Available seats</th>
					<th>Departure Date</th>
					<th>Departure Time</th>
					<th>Arrival Date</th>
					<th>Arrival Time</th>
					<th>Duration</th>
					<th>Fare</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['origin']; ?></td>
					<td><?php echo $row['originair']; ?></td>
					<td><?php echo $row['destination']; ?></td>
					<td><?php echo $row['destinationair']; ?></td>
					<td><?php echo $row['flightname']; ?></td>
					<td><?php echo $row['totalseats']; ?></td>
					<td><?php echo $row['availableseats']; ?></td>
					<td><?php echo $row['departdate']; ?></td>
					<td><?php echo $row['departtime']; ?></td>
					<td><?php echo $row['arrivedate']; ?></td>
					<td><?php echo $row['arrivetime']; ?></td>
					<td><?php echo $row['duration']; ?></td>
					<td><?php echo $row['fare']; ?></td>
					<td><a href="?page=flight_details&id=<?php echo $row['id'];?>&num=<?php echo $num;?>" type="submit" class="btn btn-primary" name="select">Select</a></td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
		<br style="line-height: 25;">
</div>