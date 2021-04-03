<?php

$con = mysqli_connect("localhost","root","","health");

if (isset($_POST["submit"])) 
{
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    $sql = mysqli_query($con, "SELECT count(*) as total from admin where user = '".$uname."' AND pass = '".$pass."'")or die(mysqli_error($con));
    $rw = mysqli_fetch_array($sql);

    if ($rw['total']>0)
    {
        session_start();
        $_SESSION['id']=$uname;
        header("location:adminui.php");
    }
    else
    {
        
        header("location:admin.php");

    }
}

?>