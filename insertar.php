<?php
include "config.php";
session_start();
error_reporting(0);

$codigo=$_POST['codigo'];
$distrito=$_POST['distrito'];
$municipio=$_POST['municipio'];
$seccion=$_POST['seccion'];
$representante=$_POST['representante'];


$sql="INSERT INTO usuarios VALUES('$codigo','$distrito','$municipio','$seccion','$representante')";
$query= mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
session_start();

if($query){
    Header("Location: datos.php");
    
}else {
}
?>

