<?php 
session_start();
$name=$_SESSION['id'];


$con = mysqli_connect("localhost","root","","health");

$sql = mysqli_query($con,"SELECT * from public");
$usr = mysqli_num_rows($sql);

$sql2 = mysqli_query($con,"SELECT * from doctor");
$dr = mysqli_num_rows($sql2);

$sql3 = mysqli_query($con,"SELECT * from hospital");
$hs = mysqli_num_rows($sql3);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin <?php echo $name; ?></title>
	<link rel="stylesheet" type="text/css" href="adminui.css">
</head>
<body>
	<div class="sidenav">
		<div class="items">
			<h1><?php echo $name; ?></h1><br><br>
			
		<a href="userac.php">User Account</a><br><br>
		<a href="doctorac.php">Doctor Account</a><br><br>
		<a href="hsac.php">Hospital Account</a><br><br>
		<a href="index.php">Log out</a>
		</div>
	</div>
	<div class="dash">Dashboard</div>
	

	<div class="user">
		Total no. of Users:
		<h1><?php echo $usr; ?></h1>
		<a href="viewuser.php">View</a>
	</div>
	<div class="doctor">
		Total no.of Doctors:
		<h1><?php echo $dr; ?></h1>
		<a href="viewdoc.php">View</a>
	</div>
	<div class="hs">
		Total no. of Hospitals
		<h1><?php echo $hs; ?></h1>
		<a href="viewhs.php">View</a>
	</div>
	
</body>
</html>