<div class="contents">
<a href="?page=activities" class="btn btn-primary">Back</a><br><br>
    <?php  
    $query="SELECT *FROM customers";
    $result=mysqli_query($con, $query) or die (mysqli_error($con));
    ?>

<?php 
    if(isset($_GET['message'])):
    $message=$_GET['message'];

if($message == 'delete-success'):?>
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Customer data deleted successfully!</strong>
						</div>
                    <?php endif; ?>
                    <?php endif;?>

    <table class="table table-hover">
        <thead>
            <tr>
            <th>I.d.</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><a href="../process/deletecustomer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete?')">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
