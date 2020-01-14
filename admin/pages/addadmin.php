<div class="contents">
<a href="?page=view_admins" class="btn btn-primary">Back</a><br>
<div class="flight_details col-md-offset-1">
	<br style="line-height: 5;">
<form method="POST">
<label>Name</label>
<input type="text" name="name" required><br><br><br>
<label>Username</label>
<input type="text" name="username" required><br><br><br>
<label>Password</label>
<input type="password" name="password" id="password" required>
<input type="checkbox" onclick="showpassword()"> Show password<br><br><br>
<input type="submit" name="submit" class="btn btn-primary" style="margin-left: 300px;" value="Submit">
</form>
</div>

<?php 

if(isset($_POST['submit'])){
include '../../config/connection.php';
$name=$_POST['name'];
$username=$_POST['username'];
$password=sha1($_POST['password']);
$query="INSERT INTO `admins` (name, ausername, password) VALUES ('$name', '$username', '$password')";
$result=mysqli_query($con, $query) or die (mysqli_error($con));

if(!$result){
	header("Location: ?page=view_admins&message=add-failed");
}

else{
	header("Location: ?page=view_admins&message=add-success");
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

<br style="line-height: 14;">
</div>