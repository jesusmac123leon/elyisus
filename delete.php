<?php

include "config.php";
    session_start();
    error_reporting(0);

$codigo=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE codigo='$codigo'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: datos.php");
    }
?>

