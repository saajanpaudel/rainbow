<div class="contents">
<a href="?page=manage_aboutus" class="btn btn-primary">Back</a><br><br>
<div class="col-md-offset-1">
    <br style="line-height: 3;">

<?php 
$id=$_GET['id'];
$query1="SELECT *FROM `aboutus` WHERE `id`='$id'";
$result1=mysqli_query($con, $query1) or die (mysqli_error($con));
?>

<form method="POST">
<label>Content</label><br>
<?php while($row1 = $result1->fetch_assoc()): ?>
<textarea name="contents" cols="100" rows="10" required><?php echo $row1['contents'];?></textarea><br><br>
<?php endwhile; ?>
<input type="submit" name="update" value="Update" class="btn btn-primary">
</form>
<br style="line-height: 11;">
</div>

<?php 
if(isset($_POST['update'])){
include '../../config/connection.php';
$contents=$_POST['contents'];
$query="UPDATE `aboutus` SET `contents` = '$contents' WHERE `id` = '$id'";
$result=mysqli_query($con, $query) or die (mysqli_error($con));

if(!$result){
	header("Location: ?page=manage_aboutus&message=update-failed");
}

else{
	header("Location: ?page=manage_aboutus&message=update-success");
}
}
?>
</div>