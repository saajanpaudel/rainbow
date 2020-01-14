<div class="contents">
<a href="?page=activities" class="btn btn-primary">Back</a><br>

<?php 
	$statement = "SELECT * FROM `contactus`";
	$result = mysqli_query($con, $statement) or die(mysqli_error($con));		
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<legend>View customers' messages</legend>
		</div>
	</div>

	<div class="row"><br>
		<?php
						if(isset($_GET['message'])):
							$message = $_GET['message'];
							if($message == 'reply-success'):
					?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Customer's message replied successfully!</strong>
								</div>
					<?php endif; ?>				
					<?php endif; ?>					
		<table class="table table-hover">
			<thead>
				<tr>
					<th>I.D.</th>
					<th>Name</th>
					<th>Message<title></title></th>
                    <th>Email</th>
                    <th>Message date</th>
                    <th>Reply message</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']?></td>
                    <td><?php echo $row['message'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['Date'];?></td>
                    <form action="?page=customer_messages&message=reply-success" method="POST"><td><input type="text" name="reply" required></td>
					<td><input type="submit" class="btn btn-primary" value="Reply"></td></form>
				</tr>
			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
<br style="line-height: 9;">

</div>