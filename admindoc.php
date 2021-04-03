<?php 
session_start();
$name=$_SESSION['name'];
$con = mysqli_connect("localhost","root","","health");
$sql = mysqli_query($con,"SELECT * from doctor WHERE id='".$name."'");
$rs = mysqli_fetch_array($sql);

if (isset($_POST['update'])) 
{
	$name = $_POST['name'];
	$num = $_POST['mobile'];

	$sql1 = "UPDATE `doctor` SET `Name` = '$name', `mobile`='$num' WHERE `id` = '$name'";

	if (mysqli_query($con,$sql1)) 
	{
		header("Refrech:0");
		
	}
	else
	{
		echo "Couldn't Update password";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor Information</title>
	<link rel="stylesheet" type="text/css" href="adviewdoc.css">
</head>
<body>
	<div class="back"><a href="adminui.php" style="border: 0;
	border-radius: 50px;
	background-color: transparent;
	display: block;
	margin: 2px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	width: 110px;
	outline: none;
	color: black;
	transition: .5s;
	cursor: pointer;
	text-decoration: none;
	position: relative;
	text-transform: uppercase;
	top: 6%;
	left: 70%;
	display: inline-block;
	height: 10px;">Back</a></div>

	<!--
	<form class="box" action="" method="post">
	<h1>Doctor Information</h1><br>
	<label style="color: white;">Id Number</label>
	<input type="text" name="name" placeholder=" Name" readonly value=<?php echo $name; ?>><br>
	<label style="color: white;">Name</label>
	<input type="text" readonly value=<?php echo $rs['Name']; ?>><br>
	<label>Mobile Number</label>
	<input type="text" readonly value=<?php echo $rs['mobile']; ?>><br>
	<input type="submit" name="update" value="update">
	</form>
-->
	<div class="table">
		<table cellspacing="20px;">
			<h1>Doctor Information</h1>
		<tr>
			<td>Id Number</td>
			<td><input type="text" readonly value=<?php echo $name; ?>></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" autocomplete="off" value=<?php echo $rs['Name']; ?>></td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td><input type="number" name="mobile" autocomplete="off" value=<?php echo $rs['mobile']; ?>></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" autocomplete="off" name="update" value="update"></td>
		</tr>
	</table>
	</div>


</body>
</html>