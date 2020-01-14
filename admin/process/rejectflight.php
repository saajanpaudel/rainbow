<?php
include '../../config/connection.php';
$id=$_GET['id'];
$query="UPDATE `passenger` SET `status`=2 WHERE `id`=$id";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header ("location: ../pages/index.php?page=flight_requests&message=flight_rejected");
?>