<?php $id=$_GET['id'];
$query="SELECT * FROM `images` WHERE `id`=$id";
$result=mysqli_query($con, $query) or die (mysqli_error($con));
?>
<div class="contents">
<a href="?page=manage_gallery" class="btn btn-primary">Back</a><br><br>
<div class="col-md-offset-1">
<form action="../process/editphoto.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
    <strong>Select image to upload:</strong> <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
    <input type="submit" value="Update" name="submit" class="btn btn-primary">
</form>
</div>
</div>

<br style="line-height: 25;">