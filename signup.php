<?php
require_once ("class/farmer.php");
$nerr = $emerr = $prr = $cprr = "";
$name = $email = $pass = $cpass = $img = "";
if (isset($_POST["signup"])) 
{
	//name
	if (empty($_POST["name"])) 
	{
		$nerr = "Name must be required<br>";
		echo $nerr;
		header("Location: http://localhost/Major/register.php?result=Name must be required");
	}
	else
	{
		$name = $_POST["name"];
	}
	//email
	if (empty($_POST["email"])) 
	{
		$emerr = "Email must be required<br>";
		echo $emerr;
		header("Location: http://localhost/Major/register.php?result=Email must be required");
	}
	else
	{
		$email = $_POST["email"];
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
		{
			$emerr = "Invalid email format<br>";
			echo $emerr;
			header("Location: http://localhost/Major/register.php?result=Invalid email format");
		}
	}
	//password
	if (empty($_POST["pass"])) 
	{
		$prr = "Password must be required<br>";
		echo $prr;
		header("Location: http://localhost/Major/register.php?result=Password must be required");
	}
	else
	{
		$pass = $_POST["pass"];
	}
	//confirm password
	if (empty($_POST["cpass"])) 
	{
		$cprr = "Confirm Password must be required<br>";
		echo $cprr;
		header("Location: http://localhost/Major/register.php?result=Confirm Password must be required<br>");
	}
	else
	{
		$cpass = $_POST["cpass"];
	}

	//images
	$img_name = $_FILES['img']['name'];
	$tmp_name = $_FILES['img']['tmp_name'];
	

	//Insertion
	if (!$nerr && !$emerr && !$prr && !$cprr) 
	{
		$data = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
		$check_email = mysqli_num_rows($data);
		if ($check_email == 0) 
		{
			if ($pass == $cpass) 
			{
				move_uploaded_file($tmp_name, "image/".$img_name);
				$pass = md5(crc32(sha1($pass)));
				$insert = "INSERT INTO users(name,email,password,image) VALUES('$name','$email','$pass','$img_name')"; 
				$query = mysqli_query($conn,$insert);
				if ($query) 
				{
					header("Location: http://localhost/Major/register.php?result=Welcome $name Now you can login");
					
				}
				else
				{
					header("Location: http://localhost/Major/register.php?result=Something isn't right...");
					
				}
			}
			else
			{
				header("Location: http://localhost/Major/register.php?result=Password not matched...");
				
			}
		}
		else
		{
			header("Location: http://localhost/Major/register.php?result=Email is already registered...");
			
		}
	}
}
?>