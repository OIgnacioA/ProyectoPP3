<?php


$host = "localhost";
$DataBase = "colegio" ;
$Name = "root";
$password = "";
 
//$tabla_Al= "Alumno"; 

$conexion = new mysqli($host,$Name,$password,$DataBase);
 

if ($conexion->connect_errno){ 


    echo "no se ha podido realizar la conexion";
    exit(); 

}



?>