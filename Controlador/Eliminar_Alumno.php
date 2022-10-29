<?php


if ( isset($_POST["confirmar"]))  {

  include("../Modelo/Conexion.php");

  $dni_P = $_POST['dni'];
  


  if (mysqli_query($conexion, " DELETE FROM alumno WHERE dni = $dni_P") || (mysqli_query($conexion, " DELETE FROM alumno WHERE pasaporte = $dni_P"))){

   
      
    echo '<script>alert( "Se realizó la baja exitosamente")</script>' ;
    
  }else  {

    echo '<script>alert( "no se pudo realizar la baja")</script>' ; 
    
    
  }
  

}


?>