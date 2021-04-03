<?php

$con = mysqli_connect("localhost","root","","health");

if (isset($_POST["submit"])) 
{
    $uname = $_POST['health'];
    

    $sql = mysqli_query($con, "SELECT count(*) as total from public where healthid = '".$uname."'");
    

    if ($sql)
    {
        session_start();
        $_SESSION['name']=$uname;
        header("location:adviewuser.php");
    }
    else
    {
       

        header("location:viewuser.php");

    }
}

?>