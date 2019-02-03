<?php
require_once 'class/users.php';
session_start();
if(!$_SESSION['id'])
{
	header("location:index.php");
}
$email = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body bgcolor="#80ffff">
<fieldset>
<legend>Welcome</legend>
<center><h1>Your Profile</h1></center>
<?php
$data = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");
$row = mysqli_fetch_assoc($data);
?>
<tr>
	<td><b>Id:-&nbsp<?php echo $row['id'];?></b></td><br/><br>
	<td><b>Name:-&nbsp<?php echo $row['name'];?></b></td><br/><br>
	<td><b>Email:-&nbsp<?php echo $row['email'];?></b></td><br/><br>
	<td><b>Contact:-&nbsp<?php echo $row['contact'];?></b></td><br/><br>
	<td><b>City:-&nbsp<?php echo $row['city'];?></b></td><br/><br>
	<td><b>Join Date:-&nbsp<?php echo $row['join_date'];?></b></td><br/><br>
	<a href = "changepass.php">change password</a>
	<a href = "logout.php">logout</a>
    <a href = "edit.php">EDIT YOUR FIELDS</a>
</tr>	
</fieldset>
</body>
</html>