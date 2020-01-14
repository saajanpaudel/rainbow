<?php
$id=$_GET['id'];
$query="SELECT * FROM `images` WHERE `id`=$id";
$result=mysqli_query($con, $query) or die (mysqli_error($con));
?>
<div class="contents">
<a href="?page=manage_gallery" class="btn btn-primary">Back</a><br><br>
<div class="col-md-offset-1">
<form action="../process/editcaption.php?id=<?php echo $id;?>" method="post">
<?php while($row=$result->fetch_assoc()):?>
    <textarea name="caption" cols="30" rows="10" required><?php echo $row['image_text']; ?></textarea> <br><br>
    <?php endwhile;?>
    <input type="submit" value="Update" name="submit" class="btn btn-primary">
</form>
</div>
</div>

<br style="line-height: 16;">