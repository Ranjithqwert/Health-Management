<?php

$con = mysqli_connect("localhost","root","","health");

if (isset($_POST["submit"])) 
{
    $uname = $_POST['id'];
    

    $sql = mysqli_query($con, "SELECT count(*) as total from doctor where id = '".$uname."'");
    

    if ($sql)
    {
        session_start();
        $_SESSION['name']=$uname;
        header("location:admindoc.php");
    }
    else
    {
       

        header("location:viewudoc.php");

    }
}

?>