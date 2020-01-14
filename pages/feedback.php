<?php
if(isset($_SESSION['username'])) {
}
else{
header('Location: index.php?page=login&message=nologin');
}
?>

<div class="row contents">
    <div class="col-md-offset-1">
        <form method="POST" role="form">
        <th>Feedback title: </th> <br> <input type="text" name="title" required><br><br><br>
        <th>Feedback</th><br><textarea type="text" name="feedback" rows="5" cols="50" required></textarea><br><br><br>
        <input type="submit" class="btn btn-primary" name='submit' value="Submit">
        </form>
    </div>
</div>

<br>

<?php 
if(isset($_POST['submit'])){
$title=$_POST['title'];
$feedback=$_POST['feedback'];
$username=$_SESSION['username'];
$query="INSERT INTO `feedbacks` (username, feedtitle, feedback) VALUES ('$username', '$title', '$feedback')";
$result=mysqli_query($con, $query) or die(mysqli_error($con));

if(!$query){
    header("location: index.php?page=feedback&message=failed");
}
else{
    header("location: index.php?page=feedback&message=success");
}
}

if(isset ($_GET['message'])):
    $message=$_GET['message'];
    ?>
    <?php
    if($message=='failed'):
?>
		<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Sorry!</strong> Something went wrong. Please try again.
        </div>
    
<?php endif;?> 
<?php endif;?> 

<?php
                if(isset($_GET['message'])):
                if($message=='success'): ?>
<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Thanks!</strong> Your feedback has been received, we will look into it soon.
        </div>
<?php endif; ?>
<?php endif; ?>
 
<br style="line-height: 17;">
