<div class="contents">
<a href="?page=activities" class="btn btn-primary">Back</a><br>
<a href="?page=addflight" class="btn btn-primary pull-right">Add flight</a><br style="line-height: 4;">
    <?php  
    $query="SELECT *FROM `flights`";
    $result=mysqli_query($con, $query) or die (mysqli_error($con));
    ?>

<?php 
    if(isset($_GET['message'])):
    $message=$_GET['message'];
        if($message == 'add-success'):
?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Flight added successfully!</strong>
            </div>
<?php endif; ?>
<?php if($message == 'delete-success'):?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Flight deleted successfully!</strong>
    </div>

<?php endif; ?>

<?php if($message == 'update-success'):?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Flight updated successfully!</strong>
    </div>	
<?php endif; ?>	  
<?php if($message == 'failed'):?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Something went wrong. Please try again!</strong>
    </div>	

<?php endif; ?>
<?php endif; ?>
<div class="row">
	</div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th>I.D.</th>
            <th>Origin</th>
            <th>Origin Airlines</th>
            <th>Destination</th>
            <th>Destination Airlines</th>
            <th>Flight's name</th>
            <th>Total seats</th>
            <th>Available seats</th>
            <th>Departure date</th>
            <th>Departure time</th>
            <th>Arrival date</th>
            <th>Arrival time</th>
            <th>Duration</th>
            <th>Fare (In NPR.)</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['origin'];?></td>
                <td><?php echo $row['originair'];?></td>
                <td><?php echo $row['destination'];?></td>
                <td><?php echo $row['destinationair'];?></td>
                <td><?php echo $row['flightname'];?></td>
                <td><?php echo $row['totalseats'];?></td>
                <td><?php echo $row['availableseats'];?></td>
                <td><?php echo $row['departdate'];?></td>
                <td><?php echo $row['departtime'];?></td>
                <td><?php echo $row['arrivedate'];?></td>
                <td><?php echo $row['arrivetime'];?></td>
                <td><?php echo $row['duration'];?></td>
                <td><?php echo $row['fare'];?></td>
                <td><a href="?page=editflight&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a><a href="../process/deleteflight.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete?')">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
