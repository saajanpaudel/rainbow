<div class="contents">
<a href="?page=activities" class="btn btn-primary">Back</a><br><br>
    <?php 
    $query="SELECT *FROM `passenger`";
    $result=mysqli_query($con, $query) or die (mysqli_error($con));
    ?>

    <?php 

    if(isset($_GET['message'])):
        $message=$_GET['message'];
        
        if($message=='flight_accepted'):
    ?>
		<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Flight accepted successfully!</strong>
		</div>
        <?php endif; ?>

    <?php if($message=='flight_rejected'):?>
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Flight rejected successfully!</strong>
        </div>
        <?php endif; ?>

        <?php if($message=='failed'):?>
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Something went wrong. Please try again!</strong>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>I.D.</th>
                <th>Sponser</th>
                <th>Sponser I.D.</th>
                <th>Gender</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Passsport no./Citizenship no.</th>
                <th>Nationality</th>
                <th>Contact name</th>
                <th>Contact no.</th>
                <th>Booking I.D.</th>
                <th>Flight status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; $id=$row['id'];?></td>
                <td><?php echo $row['sponser'];?></td>
                <td><?php echo $row['sponserid'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['dob'];?></td>
                <td><?php echo $row['passcity'];?></td>
                <td><?php echo $row['nationality'];?></td>
                <td><?php echo $row['contactname'];?></td>
                <td><?php echo $row['contactphone'];?></td>
                <td><?php echo $row['bookingid'];?></td>
                <td><?php echo $row['status'];?></td>
                <?php $status=$row['status'];?>
                <?php if($status==1) echo"
                <td style='color: green'>Flight accepted!</td>"; ?>
                <?php if($status==2) echo"
                <td style='color: red'>Flight rejected!</td>"; ?> 
                <div id='acceptreject' ><td><a id=<?='btn1'.$id?> href='../process/acceptflight.php?id=<?php echo $row['id'];?>&fid=<?php echo $row['bookingid']; ?>' class='btn btn-primary'>Accept</a><a id=<?='btn2'.$id?> href='../process/rejectflight.php?id=<?php echo $row['id'];?>' class='btn btn-danger' onclick='return confirm('Are you sure, you want to reject the flight?')'>Reject</a></td></div>
            </tr>
            <script>
                if(<?= $status?>==1 || <?= $status?>==2){
                $('#btn1'+<?= $id?>).hide();
                $('#btn2'+<?= $id?>).hide();
                }   
            </script>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<br style="line-height: 17;">

