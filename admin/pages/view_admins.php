<div class="contents">
	<a href="?page=activities" class="btn btn-primary">Back</a><br><br>
<?php 
	$statement = "SELECT * FROM `admins`";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));		
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Manage Admin Data</h4>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="?page=addadmin" class="btn btn-primary pull-right">Add Admin</a>
		</div>
	</div>
	<div class="row"><br>
		<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'add-success'):
					?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Admin data added successfully!</strong>
								</div>
					<?php endif; ?>
					<?php if($message == 'delete-success'):?>
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Admin data deleted successfully!</strong>
						</div>
					<?php endif; ?>
					<?php if($message == 'update-success'):?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Admin data updated successfully!</strong>
						</div>				
					<?php endif; ?>	

					<?php if($message == 'failed'):?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Something went wrong. Please try again!</strong>
						</div>	
					<?php endif; ?>	
					<?php endif; ?>									
		<table class="table table-hover">
			<thead>
				<tr>
					<th>I.d.</th>
					<th>Username</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['ausername']?></td>
					<td><?php echo $row['name']; ?></td>
					<td><a href="?page=editadmin&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> | <a href="../process/deleteadmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete?')">Delete</a></td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
</div>
