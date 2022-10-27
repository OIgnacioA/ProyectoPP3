<?php


if ( isset($_POST["enviar"]) || isset($_POST["envio"]) )  {


    include("../Modelo/Conexion.php");

    $Nombre = $_POST["nombre"];

    /*$Nombre = $_POST["materia"];*/

    $Codigo = $_POST["codigo"];
    $Duracion= $_POST["duracion"];
    $Resolucion = $_POST["resolucion"];
    $Caducidad = $_POST["caducidad"];
    $anioresol = $_POST["anioResolucion"];
    $Alta =  $_POST["alta"];
    $Comentarios=  $_POST["comentarios"];



    $prueba =  "SELECT * FROM carrera WHERE codigo = '$Codigo'";
    $resultado = mysqli_query($conexion,$prueba);
    $consulta = mysqli_fetch_array($resultado);

    $CODComp = $consulta['codigo'];

    if (strcmp($CODComp, $Codigo) === 0){

        echo '<script>alert( "Carrera existente (codigo en uso)")</script>)' ;

    }else {

        if (mysqli_query($conexion, " INSERT INTO carrera (nombre, codigo, duracion, resolucion, anio_caducidad, anio_resolucion,alta, comentarios) values ('$Nombre', '$Codigo',' $Duracion', '$Resolucion','$Caducidad', '$anioresol', '$Alta', '$Comentarios')")){ 

            echo '<script>alert( "se realizó el alta")</script>)' ; 
                    
        }else {echo '<script>alert( "no se pudo realizar el alta")</script>' ; }

    }
    
    
  
    
    }



?>