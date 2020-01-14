<?php
include '../../config/connection.php';
$id=$_GET['id'];
$query="UPDATE `feedbacks` SET `feedstatus`=TRUE WHERE `id`=$id";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header ("location: ../pages/index.php?page=feedbacks&message=view-success");
?>