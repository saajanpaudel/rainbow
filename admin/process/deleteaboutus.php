<?php 
include '../../config/connection.php';
$id=$_GET['id'];
$query="DELETE FROM `aboutus` WHERE id='$id'";
$result=mysqli_query($con, $query) or die (mysqli_error($con));
header ("Location: ../pages/index.php?page=manage_aboutus&message=delete-success");
?>