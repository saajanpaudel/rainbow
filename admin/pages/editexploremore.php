<?php 
$id=$_GET['id'];
$query1="SELECT *FROM `exploremore` WHERE `id`='$id'";
$result1=mysqli_query($con, $query1) or die(mysqli_error($con));
?>
<div class="contents">
<a href="?page=manage_exploremore" class="btn btn-primary">Back</a><br>
<div class="col-md-offset-1">
    <br style="line-height: 3;">
<form method="POST">
<label>Content</label><br>
<?php while($row1=$result1->fetch_assoc()): ?>
<textarea name="content" cols="60" rows="5" required><?php echo $row1['contents'];?></textarea><br><br>
<?php endwhile; ?>
<input type="submit" name="updatecontent" value="Update" class="btn btn-primary">
</form>
</div>
</div>
<br style="line-height: 20;">

<?php 
if (isset($_POST['updatecontent'])){
$content=$_POST['content'];
$query="UPDATE `exploremore` set `contents`='$content' WHERE id='$id'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));

if(!query){
    header("location: ?page=manage_exploremore&message=failed");
}

else{
    header("location: ?page=manage_exploremore&message=update-success");
}
}
?>