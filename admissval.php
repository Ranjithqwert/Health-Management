<?php 
session_start();
$name=$_SESSION['name'];
$con = mysqli_connect("localhost","root","","health");

if (isset($_POST['admit'])) 
{
	$hid = $_POST['hid'];
	$sql = "SELECT * FROM `public` where `healthid`='".$hid."'";
	$rs = mysqli_query($con,$sql);
	$res = mysqli_fetch_array($rs);

}
?>