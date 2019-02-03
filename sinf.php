<?php
require_once ("class/farmer.php");
$nerr = $num = $prr = $cprr = "";
$name = $num = $img = $pro = $pro_cat = $pro_img = $pass = $cpass ="";
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
	//number
	if (empty($_POST["num"])) 
	{
		$num = "Phone NO. Must be Reqired<br>";
		echo $num;
		header("Location: http://localhost/Major/register.php?result=Phone Number must be required");
	}
	else
	{
		$number = $_POST["num"];
		if (!filter_var($number,FILTER_VALIDATE_INT)) 
		{
			$num = "Invalid Phone Number format<br>";
			echo $num;
			header("Location: http://localhost/Major/register.php?result=Invalid Number format");
		}
	}
		//Person images
	$img_name = $_FILES['img']['name'];
	$tmp_name = $_FILES['img']['tmp_name'];
	
//Product Name
	if (empty($_POST["pro"])) 
	{
		$pro = "Product Name must be required<br>";
		echo $pro;
		header("Location: http://localhost/Major/register.php?result= Product Name must be required");
	}
	else
	{
		$pro = $_POST["pro"];
	}
	//Product Categoty
	if (empty($_POST["pro_cat"])) 
	{
		$pro_cat = "Categoty must be required<br>";
		echo $pro_cat;
		header("Location: http://localhost/Major/register.php?result=Categoty must be required");
	}
	else
	{
		$pro_cat = $_POST["pro_cat"];
	}
	//Product images
	$img_name = $_FILES['img']['name'];
	$tmp_name = $_FILES['img']['tmp_name'];
	

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

	//Insertion
	if (!$name && !$num && !$img && !$pro && !$pro_cat && !$pro_img && !$prr && !$cprr) 
	{
		$data = mysqli_query($conn,"SELECT * FROM farmer WHERE number = '$number'");
		$check_num = mysqli_num_rows($data);
		if ($check_num == 0) 
		{
			if ($pass == $cpass) 
			{
				move_uploaded_file($tmp_name, "image/".$img_name);
				$pass = md5(crc32(sha1($pass)));
				$insert = "INSERT INTO farmer(name,num,img,pro,pro_cat,pro_img,pass) VALUES('$name','$num','$img_name','$pro','$pro_cat','$img_name',$pass')"; 
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
			header("Location: http://localhost/Major/register.php?result=Number is already registered...");
			
		}
	}
}
?>