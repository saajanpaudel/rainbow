<div class="contents">
<a href="?page=activities" class="btn btn-primary">Back</a><br>

<?php 
	$statement = "SELECT * FROM `feedbacks`";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));		
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<legend>View customers' feedbacks</legend>
		</div>
	</div>

	<div class="row"><br>
		<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'view-success'):
					?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Customer feedback marked as viewed successfully!</strong>
								</div>
					<?php endif; ?>				
					<?php endif; ?>					
		<table class="table table-hover">
			<thead>
				<tr>
					<th>I.D.</th>
					<th>Username</th>
					<th>Feedback title</th>
                    <th>Feedback</th>
                    <th>Feedback date</th>
                    <th>Feedback status</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']?></td>
                    <td><?php echo $row['feedtitle'];?></td>
                    <td><?php echo $row['feedback'];?></td>
                    <td><?php echo $row['feeddate'];?></td>
					<td><? echo $row['feedstatus']?></td>
					<td><a href="../process/markviewed.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" name="view">Mark viewed</a></td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
<br style="line-height: 14;">

</div>
