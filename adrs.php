<?php 
/*
session_start();
$hid=$_SESSION['name'];
if (isset($_POST['submit'])) 
{
	
	$con=mysqli_connect("localhost","root","","health");
	$door=$_POST['door'];
	$loc1=$_POST['loc1'];
	$loc2=$_POST['loc2'];
	$dis=$_POST['dis'];
	$st = $_POST['state'];
	$

	 $sql = "UPDATE `public` SET `door` = '$door', `loc1` = '$loc1', `loc2` = '$loc2', `district` = '$dis', `state` = '$st', `password` = 'abc123', `balance` = '100' WHERE `healthid` = '$hid'";
	if (mysqli_query($con,$sql)) 
	{
		header("location:res.php");
	}

		

else
{
	echo mysqli_error($con);
}


mysqli_close($con);


}
*/
session_start();
$hid=$_SESSION['name'];
$admin = $_SESSION['id'];
$con=mysqli_connect("localhost","root","","health");
if (isset($_POST['submit'])) 
{
	
	
	$door=$_POST['door'];
	$loc1=$_POST['loc1'];
	$loc2=$_POST['loc2'];
	$dis=$_POST['dis'];
	$st = $_POST['state'];

	 /*$sql = "UPDATE public set `door`=$age where `healthid`=$hid";
	 $sql1 = "UPDATE public set `loc1`=$height where `healthid`=$hid";
	 $sql2 = "UPDATE public set `loc2`=$weight where `healthid`=$hid";
	 $sql3 = "UPDATE public set `district`=$hb where `healthid`=$hid";
	 $sql4 = "UPDATE public set `state`=$st where `healthid`= $hid";
	//$sql = "INSERT INTO `public` (`mobile`,`father mobile`) VALUES ('$name','$father') WHERE `healthid`=$hid";
*/
	 $sql = "UPDATE `public` SET `door` = '$door', `loc1` = '$loc1', `loc2` = '$loc2', `district` = '$dis', `state` = '$st', `password` = 'abc123', `balance` = '100' WHERE `healthid` = '$hid'";

	 if (mysqli_query($con,$sql)) 
	 {
	 	header("location:res.php");
	 }
	
}		



mysqli_close($con);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Step 5</title>
	<link rel="stylesheet" type="text/css" href="adrs.css">
</head>
<body>
	
<form class="box" action="#" method="post">
	<h1>Address Information</h1><br>
	<input type="number" name="door" placeholder=" Door No" autocomplete="off"><br><br>
	<input type="text" name="loc1" placeholder="Address Loc 1" autocomplete="off"><br><br>
	<input type="text" name="loc2" placeholder=" Address Loc 2" autocomplete="off"><br><br>
	<input type="text" name="dis" placeholder="District" autocomplete="off"><br><br>
	<input type="text" name="state" placeholder="State" autocomplete="off"><br><br>
	<input type="submit" name="submit" value="Create">

</form>
</body>
</html>