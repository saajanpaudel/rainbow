
<?php 
$id=$_GET['id'];
$query="SELECT *FROM `flights` WHERE `id`='$id'";
$result=mysqli_query($con, $query) or die (mysqli_error($con));
?>

<div class="contents">
<a href="?page=manage_flights" class="btn btn-primary">Back</a><br>
    <div class="col-md-offset-1 row">
    <form method="POST">
    <div class="col-md-6 colleft">
        <?php while($row=$result->fetch_assoc()): ?>
        <label>Origin</label><br>
        <input type="text" name="origin" value="<?php echo $row['origin']?>" required><br><br>

        <label>Origin Airlines</label><br>
        <input type="text" name="originair" value="<?php echo $row['originair']?>" required><br><br>
            
        <label>Destination</label><br>
        <input type="text" name="destination" value="<?php echo $row['destination']?>" required><br><br>

        <label>Destination Airlines</label><br>
        <input type="text" name="destinationair" value="<?php echo $row['destinationair']?>" required><br><br>

        <label>Flight's name</label><br>
        <input type="text" name="flightname" value="<?php echo $row['flightname']?>" required><br><br>

        <label>Total seats</label><br>
        <input type="number" name="totalseats" value="<?php echo $row['totalseats']?>" required><br><br>

        <label>Available seats</label><br>
        <input type="number" name="availableseats" value="<?php echo $row['availableseats']?>" required><br><br>
    </div>
    <div class="colright col-md-5">
        <label>Departure date</label><br>
        <input type="date" name="departdate" value="<?php echo $row['departdate']?>" required><br><br>

        <label>Departure time</label><br>
        <input type="time" name="departtime" value="<?php echo $row['departtime']?>" required><br><br>

        <label>Arrival date</label><br>
        <input type="date" name="arrivedate" value="<?php echo $row['arrivedate']?>" required><br><br>

        <label>Arrival time</label><br>
        <input type="time" name="arrivetime" value="<?php echo $row['arrivetime']?>" required><br><br>

        <label>Duration</label><br>
        <input type="text" name="duration" value="<?php echo $row['duration']?>" required><br><br>

        <label>Fare (in NPR.)</label><br>
        <input type="number" name="fare" value="<?php echo $row['fare']?>" required><br><br>

        <?php endwhile; ?>

        <input type="submit" name="update" value="Update" class="btn btn-primary">
    </div>
    </form>
    </div>
</div><br>

<?php
if(isset($_POST['update'])){
    $origin=$_POST['origin'];
    $originair=$_POST['originair'];
    $destination=$_POST['destination'];
    $destinationair=$_POST['destinationair'];
    $flightname=$_POST['flightname'];
    $totalseats=$_POST['totalseats'];
    $availableseats=$_POST['availableseats'];
    $departdate=$_POST['departdate'];
    $departtime=$_POST['departtime'];
    $arrivedate=$_POST['arrivedate'];
    $arrivetime=$_POST['arrivetime'];
    $duration=$_POST['duration'];
    $fare=$_POST['fare'];

    $query="UPDATE `flights` SET `origin`='$origin', `originair`='$originair', `destination`='$destination', `destinationair`='$destinationair', `flightname`='$flightname', `totalseats`='$totalseats', `availableseats`='$availableseats', `departdate`='$departdate', `departtime`='$departtime', `arrivedate`='$arrivedate', `arrivetime`='$arrivetime', `duration`='$duration', `fare`='$fare' WHERE `id`='$id'";
    $result=mysqli_query($con, $query) or die(mysqli_error($con));

    if(!$query){
        header("location: ?page=manage_flights&message=failed");
    }
    else{
        header("location: ?page=manage_flights&message=update-success");
    }
}
?>

