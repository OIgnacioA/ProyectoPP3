<?php



    if ( isset($_POST["UpDate"]))  {


        include("../Modelo/Conexion.php");

        $Id= $_POST["id"];

        $Estado =  $_POST["estado"];

        $Nombre = $_POST["nombre"];
        $Duracion= $_POST["duracion"];
        $Resolucion = $_POST["resolucion"];
        $Codigo = $_POST["codigo"];
        $Caducidad = $_POST["anioCaducidad"];
        $Anioresol = $_POST["anioResolucion"];
        $Plan =  $_POST["plan"];
        $Cursada =  $_POST["cursada"];
        $Alta =  $_POST["alta"];


        if (mysqli_query($conexion, "  UPDATE carrera SET  ESTADO = '$Estado' , nombre= '$Nombre', duracion = '$Duracion' ,resolucion = '$Resolucion',  codigo = '$Codigo', anio_caducidad = '$Caducidad', anio_resolucion = '$Anioresol',  alta = '$Alta', cursada = '$Cursada', plan = '$Plan'
        WHERE id = $Id;")){ 
             
             
           echo '<script>alert( "se realizó el Update ")</script>)' ; 
            
        }else {echo '<script>alert( "no se pudo realizar el UpDate")</script>' ; }

        // header('Location:../Controlador/administrar_Carrera.php');
        // die();
            
    }

    header("refresh: 1;");
?>