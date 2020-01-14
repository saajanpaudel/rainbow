<div class="contents col-md-offset-1">
<?php 
include 'config/connection.php';
$username=$_SESSION['username'];
$query="SELECT *FROM customers WHERE username='$username'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$flightid=$_GET['id'];
$num=$_GET['num'];
$query1="SELECT *FROM flights where id='$flightid'";
$result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
?>

<h4>Flight details: </h4>
<div class="flight flight_details">

<?php while($row = $result1->fetch_assoc()): ?>
<label>Flying from: </label><?php echo $row['origin']; ?><br>
<label>Departure airlines: </label><?php echo $row['originair']; ?><br>
<label>Flying to: </label><?php echo $row['destination']; ?><br>
<label>Landing airlines: </label><?php echo $row['destinationair']; ?><br>
<label>Flight name: </label><?php echo $row['flightname']; ?><br>
<label>Seats left: </label><?php echo $row['availableseats']; ?><br>
<label>Departure date: </label><?php echo $row['departdate']; ?><br>
<label>Departtime: </label><?php echo $row['departtime']; ?><br>
<label>Arrival date: </label><?php echo $row['arrivedate']; ?><br>
<label>Arrival time: </label><?php echo $row['arrivetime']; ?><br>
<label>Duration: </label><?php echo $row['duration']; ?><br>
<label>Fare per passenger: </label><?php echo "Rs. ".$row['fare']; ?><br>
<?php endwhile; ?>
</div>
<br>
<br>
<h4>Sponser details: </h4>
<div class="sponser flight_details">
<?php while($row = $result->fetch_assoc()): ?>
    <label>Sponserid: </label> <?php echo $row['id'] ?> <br>
    <label>Name: </label> <?php echo $row['name']; ?> <br>
    <label>Address: </label> <?php echo $row['address'];?> <br>
    <label>Email address: </label> <?php echo $row['email'] ?> <br>
    <label>Phone number: </label><?php echo $row['phone']; ?><br>
<?php endwhile; ?>
</div>
<br>
<br>
<div class="info card row">
<form class="flight_details" method="POST" role="form" action="?page=payment&id=<?php echo $flightid; ?>&num=<?php echo $num;?>">
    <legend>Passengers' Details:</legend>
    <br>
    <?php
$i=1;
while ($i<=$num){
    ?>
<h4>Passenger: <?= $i?></h4><br>
    <label>Gender: </label>
    <select name=<?='gender'.$i?>>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select>
    <br><br>
<label>Name:</label><input type='text' name=<?='name'.$i?> id='name' required>
<br><br>
<label>Date of Birth:</label> <input type='date' name=<?='dob'.$i?> id='dob$i' required><br><br>
<label>Passport no./Citizenship no.:</label> <input type='text' name=<?='passcity'.$i?> id='passcity$i' required><br><br>
<label>Nationality:</label> <select name=<?='nationality'.$i?> id='nationality$i' required>
    <option>Nepali</option>
    <option>Others</option>
    </select><br><br>
    <br><br>
<?php
    $i=$i+1;
     }

?>
<h4>Contact details:</strong><h4>
<label>Name:</label> <input type='text' name='contactname' id='contactname' required><br><br>
<label>Contact no.:</label> <input minlength="10" maxlength="10" type='text' name='phone' id='phone' required><br><br>
<input type="submit" class="btn btn-primary col-md-offset-3" name="proceed" value="Proceed">
</form>
 </div>
<br><br>
</div>

