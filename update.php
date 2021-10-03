<?php

include "config.php";
    session_start();
    error_reporting(0);

$codigo=$_POST['codigo'];
$distrito=$_POST['distrito'];
$municipio=$_POST['municipio'];
$seccion=$_POST['seccion'];
$representante=$_POST['representante'];

$sql="UPDATE usuarios SET  distrito='$distrito',municipio='$municipio',seccion='$seccion',representante='$representante' WHERE codigo='$codigo'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: datos.php");
    }
?>

