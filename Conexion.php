<?php


$host = "localhost";
$DataBase = "normail1_" ;
$Nombre = "root";
$password = "";
 
//$tabla_Al= "Alumno"; 

$conexion = new mysqli($host,$Nombre,$password,$DataBase);
 

if ($conexion->connect_errno){ 


    echo "no se ha podido realizar la conexion";
    exit(); 

}



?>