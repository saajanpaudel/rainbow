<?php
include '../../config/connection.php';
$id=$_GET['id'];
$caption=$_POST['caption'];
$query="UPDATE `images` SET `image_text`='$caption' WHERE `id`=$id";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header("location: ../pages/index.php?page=manage_gallery&message=update-success");
?>