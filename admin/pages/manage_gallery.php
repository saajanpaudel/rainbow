
<?php
$query="SELECT *FROM `images`";
$result=mysqli_query($con, $query) or die (mysqli_error($con));
?>

<div class="contents">
<a href="?page=activities" class="btn btn-primary">Back</a><br>

<div class="container">

			<legend><h4>Manage Photo Gallery</h4></legend>

	<a href="?page=upload_photo" class="btn btn-primary pull-right">Add photo</a>

	<div class="row"><br>
		<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'upload_success'):
                    ?>
                                <br>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Image uploaded successfully!</strong>
								</div>
					<?php endif; ?>
					<?php if($message == 'delete-success'):?>
						<br><div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Image deleted successfully!</strong>
						</div>
					<?php endif; ?>
					<?php if($message == 'update-success'):?>
						<br><div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Image content updated successfully!</strong>
						</div>	
                    <?php endif; ?>
					<?php if($message == 'failed'):?>
						<br> <div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Something went wrong. Please try again!</strong>
						</div>	
										
					<?php endif; ?>					
					<?php endif; ?>					
		<table class="table table-hover">
			<thead>
				<tr>
					<th>I.D.</th>
                    <th>Photo</th>
                    <th>Caption</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
                    <td><img src=<?php $source=$row['image']; echo $source; ?> height="100px" width="180px"></td>
                    <td><?php echo $row['image_text'] ?></td>
					<td><a href="?page=editphoto&id=<?php echo $row['id']; ?>" class="btn btn-primary">Update photo</a> <a href="?page=editcaption&id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit caption</a> <a href="../process/deletephoto.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete?')">Delete</a></td>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>

</div>