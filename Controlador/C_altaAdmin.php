<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>

<?php
 error_reporting(0);

  session_start(); 
  

  if (isset($_POST["envio"]) )  {
        

    include("../Modelo/Conexion.php");

    $Nombre = $_POST["nombre"];
    $Apellido =  $_POST["apellido"];
    $tipo = $_POST["DNIPassT"];
    $email =  $_POST["email"];
    $rol=  $_POST["roll"];
    $carrera=  $_POST["carrera"];
    echo "nombre---------------: ". $Nombre;

    // asignacion por defecto. 
   $pass="NULL";
   $DNI="NULL";

//------------------------------------------DNI o Pass? 
   
$DNI_P =  $_POST["dniPass"];

 
  if ($tipo == 'D') {

    $_SESSION['dni'] =  $DNI_P; //para comprobacion
    $DNI =  $DNI_P;//asignacion local

  }else {

    $_SESSION['pass']=  $GLOBALS['$DNI_P'];//para comprobacion
    
    $pass = $DNI_P;//asignacion local
 
  }
    
    //comprobacion existente-no (retorno) -

    include("ControlDNI.php");
   
    $DNINuevo = $_SESSION['$checkeoDNI'];
   
  
  //-------------------------------------------------
  echo "nombre: ". $Nombre;

    if ($DNINuevo == 0){

      switch ($rol) {

        case "Alumno":

          if (mysqli_query($conexion, " INSERT INTO  alumno (nombre, apellido, dni, pasaporte,  email, rol, fk_carrera_id) values ('$Nombre', '$Apellido','$DNI','$pass', '$email','$rol',$carrera)")){ 

            echo '<script>alert( "Se realizó el ingreso exitosamente")</script>)' ; 
              
          }else {echo '<script>alert(" no se pudo realizar el ingreso (T1)")</script>' ;  }

        break;

        case "Docente":
          
          if (mysqli_query($conexion, " INSERT INTO  profesor (nombre, apellido, dni,  email, rol) values ('$Nombre', '$Apellido','$DNI','$email','$rol')")){ 

            echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;
              
          }else {echo '<script>alert(" no se pudo realizar el ingreso (T2)")</script>' ; }

          break;

        default :

          if (mysqli_query($conexion, " INSERT INTO  personal (nombre, apellido, dni, pasaporte, email, rol, id_carrera) values ('$Nombre', '$Apellido','$DNI','$pass','$email','$rol', '$carrera' )")){ 

            echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;
              
          }else {echo '<script>alert(" no se pudo realizar el ingreso (t3)")</script>' ; }
          
        break;
      }

    }else {

      echo '<script>alert( "El contacto ya existe")</script>)' ; 
      
    }
   
    
  }

  

?>

</body>
</html>