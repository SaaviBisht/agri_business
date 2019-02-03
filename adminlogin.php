<?php
$con = mysqli_connect("localhost","root","","buspass");
$email = $_POST['email'];
$pass = $_POST['pass'];
//Select Data
$data = mysqli_query($con,"SELECT * FROM admin WHERE email = '$email'");
$row = mysqli_fetch_assoc($data);
if ($pass == $row['password']) 
{
	session_start();
	$_SESSION['email'] = $row['email'];
	header("location:dashboard.php");
}
else
{
	echo "Password didn't matched...";
}
?>