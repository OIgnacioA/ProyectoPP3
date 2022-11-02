
<?php
 error_reporting(0);

  session_start(); 
  

  if (isset($_POST["envio"]) )  {
        

    include("../Modelo/Conexion.php");

    include("Personal.php");

    $nuevoAgente = new Personal(); 

    $Nom = $_POST["nombre"];
    $Ape =  $_POST["apellido"];
    $mail =  $_POST["email"];
    $rol=  $_POST["roll"];
    $carr=  $_POST["carrera"];

    $DNIP = $_POST["dniPass"];//valor
    $tip = $_POST["DNIPassT"];//tipo
   


    $exi = $nuevoAgente->comprobarExistencia($DNIP,$tip);
   

    if ($tip =='P') {
      $nuevoAgente->setPasaporte($DNIP);
    }else {$nuevoAgente->setDNI($DNIP);}



    $nuevoAgente->setNombre($Nom);
    $nuevoAgente->setApellido($Ape);
    $nuevoAgente->setMail($mail);
    $nuevoAgente->setRol($rol);
    $nuevoAgente->setCarrera($carr);
   
    $Nombre = $nuevoAgente->getNombre();
    $Apellido = $nuevoAgente->getApellido();
    $DNI = $nuevoAgente->getDNI();
    $pass = $nuevoAgente->getPasaporte();
    $email = $nuevoAgente->getMail();
    $rol = $nuevoAgente->getRol();
    $carrera = $nuevoAgente->getCarrera();
   

  //-------------------------------------------------

   

    if ($exi == 0){

      switch ($rol) {

        case "Alumno":

          if (mysqli_query($conexion, " INSERT INTO  alumno (nombre, apellido, dni, pasaporte,  email, rol, fk_carrera_id) values ('$Nombre', '$Apellido','$DNI','$pass', '$email','$rol',$carrera)")){ 

            echo '<script>alert( "Se realizó el ingreso exitosamente")</script>)' ; 
              
          }else {echo '<script>alert(" no se pudo realizar el ingreso (T1)")</script>' ;  }

        break;

        case "Docente":
          
          if (mysqli_query($conexion, " INSERT INTO  profesor (nombre, apellido, dni,  email,pasaporte, rol) values ('$Nombre', '$Apellido','$DNI','$email','$pass','$rol')")){ 

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