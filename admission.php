<?php  
session_start();
$hos = $_SESSION['name'];

$id = $_SESSION['id'];

$con = mysqli_connect("localhost","root","","health");
$sql = "SELECT * FROM `public` where `healthid`='".$id."'";
$rs = mysqli_query($con,$sql);

$res = mysqli_fetch_array($rs);

$pname = $res['name'];

$billid = mt_rand(00000000,99999999);
$date = date("y-m-d");

if (isset($_POST['admit'])) 
{
	$sql2 = "INSERT INTO `payments` (`id`, `uid`, `hid`, `Date`, `reason`, `amount`, `status`) VALUES ('".$billid."','". $id."','". $hos."', '".$date."', 'Admission', '500', 'pending')";
	$sql3 = "INSERT INTO `patient` (`uid`, `hid`, `uname`, `status`) VALUES ('".$id."', '".$hos."', '".$pname."', 'admitted')";



	if (mysqli_query($con,$sql2)) 
	{
		if (mysqli_query($con,$sql3)) 
		{
			header("location:admiss.php");
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admission</title>
	<link rel="stylesheet" type="text/css" href="fom.css">
</head>
<body>
	<form method="post">
<div class="form">
	<h1 class="thead">Patients Details</h1>
	<table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Date</td>
			<td><?php echo $date; ?></td>
		</tr>
		<tr>
			<th>Health Id</th>
			<td><?php echo $id; ?></td>
			<th>Name</th>
			<td><?php echo $res['name']; ?></td>
			<th>Mobile Number</th>
			<td><?php echo $res['mobile']; ?></td>
		</tr>
				<tr>
			<th>Father Name</th>
			<td><?php echo $res['name']; ?></td>
			<th>Father Number</th>
			<td><?php echo $res['fname']; ?></td>
			<th>Email</th>
			<td style="text-transform: lowercase;"><?php echo $res['email']; ?></td>
		</tr>		<tr>
			<th>Weight</th>
			<td><?php echo $res['weight']; ?></td>
			<th>Height</th>
			<td><?php echo $res['height']; ?></td>
			<th>Age</th>
			<td><?php echo $res['age']; ?></td>
		</tr>	
		<tr>
			
			<th colspan="6" style="background-color:  #128565; position: relative; width:100%">Address Information</th>
		</tr>	
		<tr>
			<th>Door No</th>
			<td><?php echo $res['door']; ?></td>
			<th>Location 1</th>
			<td><?php echo $res['loc1']; ?></td>
			<th>Location 2</th>
			<td><?php echo $res['loc2']; ?></td>
		</tr>	
		<tr>
			
			<th colspan="6" style="background-color:  #128565; position: relative; width:100%">Medical Information</th>
		</tr>	
		<tr>
			<th>Sugar</th>
			<td><?php echo $res['sugar']; ?></td>
			<th>Bp</th>
			<td><?php echo $res['BP']; ?></td>
			<th>Blood Group</th>
			<td><?php echo $res['bgroup']; ?></td>
		</tr>
		<tr>
			<th colspan="6" style="background-color:  #128565; position: relative; width:100%">Admission Details</th>

		</tr>
		<tr>
			<th>Bill Id</th>
			<td><?php echo $billid; ?></td>
			<th>Bill details</th>
			<td>Admission only</td>
			<td><p>Total</p></td>
			<td><p id="am" name="amount">500</p></td>
		</tr>		
		<tr>
			<td colspan="3"><a href="admiss.php" class="back">Back</a></td>
			<td colspan="3" id="am"><input type="Submit" name="admit" value="Proceed"></td>
		</tr>
	</table>
</div>


</form>

</body>
</html>