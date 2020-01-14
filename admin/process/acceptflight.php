<?php
include '../../config/connection.php';
$id=$_GET['id'];
$fid=$_GET['fid'];
$query1="SELECT * FROM `flights` WHERE `id`='$fid'";
$result1=mysqli_query($con, $query1) or die(mysqli_error($con));
while($row=$result1->fetch_assoc()){
$availableseats=$row['availableseats'];
}
$availableseats1=intval($availableseats-1);
$query1="UPDATE `flights` SET `availableseats`='$availableseats1' WHERE id='$fid'";
$result1=mysqli_query($con, $query1) or die(mysqli_error($con));
$query="UPDATE `passenger` SET `status`=TRUE WHERE `id`='$id'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header ("location:../pages/index.php?page=flight_requests&message=flight_accepted");
?>