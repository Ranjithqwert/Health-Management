<?php 
session_start();
$name=$_SESSION['name'];
$con = mysqli_connect("localhost","root","","health");

if (isset($_POST['admit'])) 
{
	$hid = $_POST['hid'];
	$health = $_SESSION['id'];
	$sql = "SELECT * FROM `public` where `healthid`='".$hid."'";
	$rs = mysqli_query($con,$sql);
	$res = mysqli_num_rows($rs);
	if ($res>0) 
	{
		$_SESSION['id']=$hid;
	header("location:admission.php");

	}
	else
	{
		echo "User HealthId Not Exist";
	}

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Admission</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<h1 style="position: absolute;left: 20%; text-shadow: 2px;">Make Admission For Patient</h1>
	<div class="sidenav">
		<div class="items">
		<table>
			<tr>
				<td><a href="hosui.php">Home</a><br><br></td>
			</tr>
			<tr>
				<td><a href="patient.php">Patient History</a><br><br></td>
			</tr>
			<tr>
				<td><a href="payment.php">Payment History</a><br><br></td>
			</tr>
			<tr>
				<td><a href="index.php">Log out</a></td>
			</tr>
		</table>	
			
		
		
		
		
		</div>
	</div>

	<div class="box">
		<form  method="post">
			<h2 class="thead">Enter HealthId</h2>
			<input type="Number" name="hid" placeholder="Enter patient HealthId"><br>
			<input type="submit" name="admit" value="Make Admission">
		</form>
		
	</div>
	
	


</body>
</html>