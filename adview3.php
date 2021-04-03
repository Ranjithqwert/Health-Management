<?php

$con = mysqli_connect("localhost","root","","health");

if (isset($_POST["submit"])) 
{
    $uname = $_POST['id'];
    

    $sql = mysqli_query($con, "SELECT count(*) as total from hospital where id = '".$uname."'");
    

    if ($sql)
    {
        session_start();
        $_SESSION['name']=$uname;
        header("location:adviewhs.php");
    }
    else
    {
       

        header("location:viewudoc.php");

    }
}

?>