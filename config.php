<?php 

$server="us-cdbr-iron-east-05.cleardb.net";
$user="b83c2d293c6136";
$pass="22fe08c4";
$database="heroku_eaf83c356a363bf";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Conexión fallida");
}

?>