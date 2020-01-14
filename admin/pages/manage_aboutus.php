<div class="contents">
<a href="?page=manage_pages" class="btn btn-primary">Back</a><br>
<?php 
	$statement = "SELECT * FROM `aboutus`";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));		
 ?>
<div class="container">

			<legend><h4>Manage About us contents</h4></legend>

	<a href="?page=addaboutus" class="btn btn-primary pull-right">Add content</a>

	<div class="row"><br><br>
		<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'add-success'):
					?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Content added successfully!</strong>
								</div>
					<?php endif; ?>
					<?php if($message == 'delete-success'):?>
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Content deleted successfully!</strong>
						</div>
					<?php endif; ?>
					<?php if($message == 'update-success'):?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Content updated successfully!</strong>
						</div>	
						
					<?php if($message == 'failed'):?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Something went wrong. Please try again!</strong>
						</div>	
					
					<?php endif; ?>					
					<?php endif; ?>					
					<?php endif; ?>					
		<table class="table table-hover">
			<thead>
				<tr>
					<th>I.D.</th>
					<th>Contents</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['contents']?></td>
					<td><a href="?page=editaboutus&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a><a href="../process/deleteaboutus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete?')">Delete</a></td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
</div>
<br style="line-height: 7">
