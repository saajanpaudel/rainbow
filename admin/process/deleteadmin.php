<?php 
include '../../config/connection.php';
$id=$_GET['id'];
$query="DELETE FROM `admins` WHERE id='$id'";
$result=mysqli_query($con, $query) or die (mysqli_error($con));
header ("Location: ../pages/index.php?page=view_admins&message=delete-success");
?>