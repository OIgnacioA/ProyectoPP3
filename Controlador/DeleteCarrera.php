<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];


  if($nombre == null || $psswrd == null || $rol != 'super'){

    die(); 

  }
 


    if ( isset($_POST["Delete"]))  {


    include("../Modelo/Conexion.php");
    
    $Id= $_POST["id"];

    


         if (mysqli_query($conexion, "  DELETE FROM carrera where  id = $Id ;")){ 

            echo '<script>alert( "se Eliminó la Carrera" )</script>)' ; 

            header ("location:Super_administrar_Carrera.php");

         }else {echo '<script>alert( "no se pudo eliminar la Carrera ")</script>' ; }

            header ("location:Super_administrar_Carrera.php");

         die();
        
    }

    die();

  ?>