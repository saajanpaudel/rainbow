
<?php 
include 'config/connection.php';

	$query = "SELECT * FROM `flights`";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));

 ?>

 <div class="contents">
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
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
</div>
