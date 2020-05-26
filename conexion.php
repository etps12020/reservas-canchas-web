<?php

function connectDB(){

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "reservas_utec";


    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    return $conexion;
} 

?>