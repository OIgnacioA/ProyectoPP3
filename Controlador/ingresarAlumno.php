
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
<p><a href="index.php">inicio</a></p>
</body>
</html>

<?php

  //error_reporting(0);

  


  if ( isset($_POST["send"]))  {


    include("../Modelo/Conexion.php");

    $Nombre = $_POST["nombre"];
    $Apellido =  $_POST["apellido"];
    $genero = $_POST["genero"];
    $carrera = $_POST["carrera"];
    $FechaNac = $_POST["calendarioN"];
    $tipo = $_POST["DNIPassT"];
    $email =  $_POST["email"];
    $emailC =  $_POST["emailC"];
    $codA = $_POST["cod"];
    $codAC =  $_POST["codC"];
    $tel = $_POST["tel"];
    $telC =  $_POST["telC"];
    $direccion =  $_POST["direccion"];
    $provincia = $_POST["provincia"];
    $localidad = $_POST["localidad"];
    $titulo = $_POST["titulo"]; 
    $calendarioAlt = $_POST["calendarioAlta"];
    $estado =  $_POST["estado"];
    $observacion =  $_POST["observacion"];
    $telefono = $_POST["tele"];
    $egreso = $_POST["egreso"];

    

    // asignacion por defecto. 
    $pass="NULL";
    $DNI="NULL";

    //------------------------------------------DNI o Pass? 
    $DNI_P = $_POST["dniP"];

    if ($DNI_P !=""){
    

      if ($tipo == 'D')  {

        $_SESSION['dni'] =  $DNI_P; //para comprobacion
        $DNI =  $DNI_P;//asignacion local
       

      }else {

        $_SESSION['pass']= $DNI_P;//para comprobacion  existente en BBDD -no 
        
        $pass = $DNI_P;//asignacion local
       
      }
        
      //comprobacion existente-no (retorno) -
     

      include("ControlDNI.php");

      $DNINuevo = $_SESSION['$checkeoDNI'];

    

      //-------------------------------------------------


      if ($DNINuevo == 0){


        if (mysqli_query($conexion, " INSERT INTO alumno (nombre, apellido, fnacimiento, genero, dni, email, cod_area, telefono,contacto_mail,      cod_area_cont, telefonocont, direccion, provincia, localidad, titulos, fe_alta, estado, observaciones, pasaporte,fk_carrera_id, rol) values ('$Nombre', '$Apellido', '$FechaNac','$genero', '$DNI','$email', '$codA', '$tel', '$emailC', '$codAC', '$telC','$direccion','$provincia', '$localidad', '$titulo','$calendarioAlt', '$estado', '$observacion', '$pass',  '$carrera', 'Alumno')"))

        echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;
      
        session_destroy();
       
       

      }else {   echo '<script>alert( "El contacto ya existe")</script>)'; 

        
        //die(); ; 
        session_destroy();
      }
    }
    session_destroy();
  } 

 
  
?>
