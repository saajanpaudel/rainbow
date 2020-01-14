<div class="contents">
<a href="?page=manage_exploremore" class="btn btn-primary">Back</a><br>
<div class="col-md-offset-1">
    <br style="line-height: 3;">
<form method="POST">
<label>Content</label><br>
<textarea name="content" cols="60" rows="5" required></textarea><br><br>
<input type="submit" name="addcontent" value="Add" class="btn btn-primary">
</form>
</div>
<br style="line-height: 20;">

<?php 
if (isset($_POST['addcontent'])){
$content=$_POST['content'];
$query="INSERT INTO `exploremore` (contents) values ('$content')";
$result=mysqli_query($con, $query) or die(mysqli_error($con));

if(!query){
    header("location: ?page=manage_exploremore&message=failed");
}

else{
    header("location: ?page=manage_exploremore&message=add-success");
}
}
?>
</div>