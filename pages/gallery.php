<div class='gallery contents' style="margin-top: 80px">
	<h4 class="col-md-offset-1">A journey from which life-long memories are created</h4><br>
<?php
$query="SELECT * FROM `images`";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
while($row=$result->fetch_assoc()):
	$source=$row['frontimage'];
	$caption=$row['image_text'];
	  ?>
	 <a href="<?php echo $source; ?>" data-lightbox='airgallery' data-title='<?php echo $caption; ?>'><img src=<?php echo $source; ?> height="150px" width="230px"></a>
<?php
endwhile;
?>
</div>
<br style="line-height: 3;">
