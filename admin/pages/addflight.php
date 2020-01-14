<div class="contents">
<a href="?page=manage_flights" class="btn btn-primary">Back</a><br>
    <div class="col-md-offset-1 row">
    <form method="POST">
    <div class="col-md-6 colleft">
        <label>Origin</label><br>
        <input type="text" name="origin" required><br><br>

        <label>Origin Airlines</label><br>
        <input type="text" name="originair" required><br><br>
            
        <label>Destination</label><br>
        <input type="text" name="destination" required><br><br>

        <label>Destination Airlines</label><br>
        <input type="text" name="destinationair" required><br><br>

        <label>Flight's name</label><br>
        <input type="text" name="flightname" required><br><br>

        <label>Total seats</label><br>
        <input type="number" name="totalseats" min=1 required><br><br>
    </div>
    <div class="colright col-md-5">
        <label>Departure date</label><br>
        <input type="date" name="departdate" required><br><br>

        <label>Departure time</label><br>
        <input type="time" name="departtime" required><br><br>

        <label>Arrival date</label><br>
        <input type="date" name="arrivedate" required><br><br>

        <label>Arrival time</label><br>
        <input type="time" name="arrivetime" required><br><br>

        <label>Duration</label><br>
        <input type="text" name="duration" required><br><br>

        <label>Fare (In NPR.)</label><br>
        <input type="number" name="fare" required><br><br>

        <input type="submit" name="save" value="Save" class="btn btn-primary">
    </div>
    </form>
    </div>
</div>

<br>

<?php
if(isset($_POST['save'])){
    $origin=$_POST['origin'];
    $originair=$_POST['originair'];
    $destination=$_POST['destination'];
    $destinationair=$_POST['destinationair'];
    $flightname=$_POST['flightname'];
    $totalseats=$_POST['totalseats'];
    $availableseats=$totalseats;
    $departdate=$_POST['departdate'];
    $departtime=$_POST['departtime'];
    $arrivedate=$_POST['arrivedate'];
    $arrivetime=$_POST['arrivetime'];
    $duration=$_POST['duration'];
    $fare=$_POST['fare'];

    $query="INSERT INTO `flights` (origin, originair, destination, destinationair, flightname, totalseats, availableseats, departdate, departtime, arrivedate, arrivetime, duration, fare) VALUES ('$origin', '$originair', '$destination', '$destinationair', '$flightname', '$totalseats', '$availableseats', '$departdate', '$departtime', '$arrivedate', '$arrivetime', '$duration', '$fare')";
    $result=mysqli_query($con, $query) or die(mysqli_error($con));

    if(!$query){
        header("location: ?page=manage_flights&message=failed");
    }
    else{
        header("location: ?page=manage_flights&message=add-success");
    }
}
?>
