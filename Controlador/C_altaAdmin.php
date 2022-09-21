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


    session_start(); 

    if (isset($_POST["envio"]) )  {
          
  
      include("../Modelo/Conexion.php");

      $Nombre = $_POST["nombre"];
      $Apellido =  $_POST["apellido"];
      $DNI =  $_POST["dniPass"];
      $email =  $_POST["email"];
      $rol=  $_POST["roll"];
      $carrera=  $_POST["carrera"];
      
      switch ($rol) {

        case "Alumno":

          if (mysqli_query($conexion, " INSERT INTO  alumno (nombre, apellido, dni,  email, rol,fk_carrera_id) values ('$Nombre', '$Apellido','$DNI','$email','$rol',$carrera)")){ 

            echo '<script>alert( "Se realizó el ingreso exitosamente")</script>)' ; 
              
          }else {echo '<script>alert(" no se pudo realizar el ingreso")</script>' ;  }

          break;

        case "Docente":
          
          if (mysqli_query($conexion, " INSERT INTO  profesor (nombre, apellido, dni,  email, rol) values ('$Nombre', '$Apellido','$DNI','$email','$rol')")){ 

            echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;
              
          }else {echo '<script>alert(" no se pudo realizar el ingreso")</script>' ; }

          break;

        default :

        if (mysqli_query($conexion, " INSERT INTO  personal (nombre, apellido, dni,pasaporte,  email, rol) values ('$Nombre', '$Apellido','$DNI','$DNI','$email','$rol')")){ 

          echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;
            
        }else {echo '<script>alert(" no se pudo realizar el ingreso")</script>' ; }

        break;
      }
      
      
      }
     
    

  ?>

</body>
</html>