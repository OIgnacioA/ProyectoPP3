<?php


//  $host = "localhost";
//  $DataBase = "u143332576_colegio" ;
//  $Name = "u143332576_admin";
//  $password = "Ludobica666!";


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