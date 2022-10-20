<?php


if ( isset($_POST["envio"]))  {


    include("../Modelo/Conexion.php");

    $id = $_POST["id"];
    $Nombre = $_POST["nombre"];
    $Duracion= $_POST["duracion"];
    $cursada = $_POST["cursada"];
  

        if (mysqli_query($conexion, "  UPDATE carrera SET nombre= '$Nombre', duracion = '$Duracion' ,  cursada ='$cursada' 
        WHERE id = $id;")){ 

            echo '<script>alert( "se realizó el Update ")</script>)' ; 
                    
        }else {echo '<script>alert( "no se pudo realizar el UpDate")</script>' ; }

    
        require_once("../Controlador/administrar_vistaCarrera.php");
}

?>