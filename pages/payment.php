<div class="contents">
<?php
include 'config/connection.php';
$username=$_SESSION['username'];
$query="SELECT *FROM customers WHERE username='$username'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$flightid=$_GET['id'];
$num=$_GET['num'];
$query1="SELECT *FROM flights where id='$flightid'";
$result1 = mysqli_query($con, $query1) or die(mysqli_error($con));

while($row = $result->fetch_assoc()):
if(isset($_POST['proceed']))
	{
        $i=1;
while ($i<=$num){
    echo $i;
        $sponser=$row['name'];
        $sponserid=$row['id'];
        $gender=$_POST['gender'.$i];
        $name=$_POST['name'.$i];
        $dob=$_POST['dob'.$i];
        $passcity=$_POST['passcity'.$i];
        $nationality=$_POST['nationality'.$i];
        $contactname=$_POST['contactname'];
        $contactphone=$_POST['phone'];
        $bookingid=$flightid;
        $query2="INSERT INTO passenger (sponser, sponserid, gender, name, dob, passcity, nationality, contactname, contactphone, bookingid) VALUES ('$sponser', '$sponserid', '$gender', '$name', '$dob', '$passcity','$nationality', '$contactname', '$contactphone', '$bookingid')";
        $result2=mysqli_query($con, $query2) or die(mysqli_error($con));
        $i=$i+1;
    }
		if(!$query2){
		header("location: index.php?page=payment&message=failed&id=$flightid");
	}

	else{
		header("location: index.php?page=payment&message=success&id=$flightid&num=$num");	
	}
    }
endwhile;

if(isset($_GET['message'])):
    $message=$_GET['message'];
    if($message=='failed'):
        ?>
            <div class="alert alert-danger">
			<strong>Sorry!</strong> Something went! Please try again later!
			</div>
    <?php
    elseif($message=='success'):
    ?>
    	<div class="alert alert-success">
		<strong>Congratulations! You flight request has been received.</strong> Please pay Rs. <?php while($row = $result1->fetch_assoc()): echo $row['fare']; endwhile; ?> per person after your flight is accepted to claim your flight ticket(s).
	    </div>
        <?php
		endif;
    endif;
?>

<br style="line-height: 34;">

</div>
