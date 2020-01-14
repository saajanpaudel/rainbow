<div class="contents">
<a href="?page=view_admins" class="btn btn-primary">Back</a><br>
<div class="col-md-offset-1">
	<br style="line-height: 3;">
<?php 
$id=$_GET['id'];
$query1="SELECT *FROM `admins` WHERE `id`='$id'";
$result1=mysqli_query($con, $query1) or die (mysqli_error($con));
?>
<form method="POST">
<?php while($row1 = $result1->fetch_assoc()): ?>
<label>Name</label><br><input type="text" name="name" value="<?php echo $row1['name'];?>" required><br><br><br>
<label>Username</label><br><input type="text" name="username" value="<?php echo $row1['ausername'];?>" required><br><br><br>
<?php endwhile; ?>
<label>Password</label><br><input type="password" name="password" id="password" required>
<input type="checkbox" onclick="showpassword()"> Show password<br><br><br>
<input type="submit" name="update" class="btn btn-primary" value="Update">
</form>
</div>

<?php 
if(isset($_POST['update'])){
include '../../config/connection.php';
$name=$_POST['name'];
$username=$_POST['username'];
$password=sha1($_POST['password']);
$query="UPDATE `admins` SET `ausername` = '$username', `name`='$name', `password`='$password' WHERE `id` = '$id'";
$result=mysqli_query($con, $query) or die (mysqli_error($con));

if(!$result){
	header("Location: ?page=view_admins&message=update-failed");
}

else{
	header("Location: ?page=view_admins&message=update-success");
}
}
?>

<script>
function showpassword() {
		var pass = document.getElementById("password");
		if (pass.type === "password") {
			pass.type = "text";
		} else {
			pass.type = "password";
		}
}
</script>
<br style="line-height: 11;">
</div>