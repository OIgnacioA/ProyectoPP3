
<?php

  //error_reporting(0);

  


  if ( isset($_POST["send"]))  {


   include("../Modelo/Conexion.php");

   include("Alumno.php");


    $nuevoAlumno = new Alumno(); 

     

    $Nom = $_POST["nombre"];
    $Ape =  $_POST["apellido"];
    $gen = $_POST["genero"];
    $carr = $_POST["carrera"];
    $FechaN = $_POST["calendarioN"];
    $mail =  $_POST["email"];
    $mailC =  $_POST["emailC"];
    $cod_A = $_POST["cod"];
    $cod_AC =  $_POST["codC"];
    $phone = $_POST["tele"];
    $tel_C =  $_POST["telC"];
    $dir =  $_POST["direccion"];
    $prov = $_POST["provincia"];
    $loc = $_POST["localidad"];
    $tit = $_POST["titulo"]; 
    $cal_Alt = "01/01/2000";
    $est = "NULL";
    $obs =  "NULL";
    $egr = $_POST["egreso"];


    $tip = $_POST["DNIPassT"];//tipo
    $DNIP = $_POST["dniP"];//valor

   
  
    //_______________________________________GET and SET: 
   
    $exi = $nuevoAlumno->comprobarExistencia($DNIP, $tip);

    


    if ($tip =='P') {
      $nuevoAlumno->setPasaporte($DNIP);
    }else {$nuevoAlumno->setDNI($DNIP);}

   

    $nuevoAlumno->setNombre($Nom);
    $nuevoAlumno->setApellido($Ape);
    $nuevoAlumno->setMail($mail);
    $nuevoAlumno->setTelefono($phone);
    $nuevoAlumno->setCarrera($carr);
    $nuevoAlumno->setGenero($gen);
    $nuevoAlumno->setFechaNac($FechaN);
    $nuevoAlumno->setEmailC($mail);
    $nuevoAlumno->setCodA($cod_A);
    $nuevoAlumno->setTelC($tel_C);
    $nuevoAlumno->setDireccion($dir);
    $nuevoAlumno->setProvincia($prov);
    $nuevoAlumno->setLocalidad($loc);
    $nuevoAlumno->setTitulo($tit);
    $nuevoAlumno->setCalendarioAlt($cal_Alt);
    $nuevoAlumno->setEstado($est);
    $nuevoAlumno->setObservacion($obs);
    $nuevoAlumno->setEgreso($egr);

    

    $Nombre = $nuevoAlumno->getNombre();
    $Apellido = $nuevoAlumno->getApellido();
    $DNI = $nuevoAlumno->getDNI();
    $pass = $nuevoAlumno->getPasaporte();
    $email = $nuevoAlumno->getMail();
    $tel = $nuevoAlumno->getTelefono();
    $genero = $nuevoAlumno->getGenero();
    $carrera = $nuevoAlumno->getCarrera();
    $FechaNac = $nuevoAlumno->getFechaNac();
    $emailC =  $nuevoAlumno->getEmailC();
    $codA = $nuevoAlumno->getCodA();
    $codAC =  $nuevoAlumno->getCodAC();
    $telC =  $nuevoAlumno->getTelC();
    $direccion =  $nuevoAlumno->getDireccion();
    $provincia = $nuevoAlumno->getProvincia();
    $localidad = $nuevoAlumno->getLocalidad();
    $titulo = $nuevoAlumno->getTitulo();
    $calendarioAlt = "01/01/2000";
    $estado = "NULL";
    $observacion =  "NULL";
    $egreso = $nuevoAlumno->getEgreso();


      if ($exi == 0){

        if (mysqli_query($conexion, " INSERT INTO alumno (nombre, apellido, fnacimiento, genero, dni, email, cod_area, telefono,contacto_mail,cod_area_cont, telefonocont, direccion, provincia, localidad, titulos, fe_alta, estado, observaciones, pasaporte,fk_carrera_id, rol) values ('$Nombre', '$Apellido', '$FechaNac','$genero', '$DNI','$email', '$codA', '$tel', '$emailC', '$codAC', '$telC','$direccion','$provincia', '$localidad', '$titulo','$calendarioAlt', '$estado', '$observacion', '$pass',  '$carrera', 'Alumno')")){
      
          echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;

          ////////////////MAil: 

            $header = ' From: noreply@example.com'  . " \r\n";
            $header .='Reply-To: webmaster@example.com' . "\r\n" .
            $header .= "X-Mailer: PHP/" .phpversion() . " \r\n";
          


            $message= " Por medio de la presente se le informa que su preinscripción ha sido recepcionada. Por favor, hágase presente en la institución con la documentación requerida en los horarios de xxxx hs a xxxx hs.  ". " \r\n" .

            "Saludos cordiales.". " \r\n" .
            
            "La Administración" . " \r\n" .
            
            "Instituto XXXXXXX". " \r\n" ;

            $para = $email ; 
            $asunto = "Pre-inscripcion recepcionada";

            mail($para, $asunto, $message, $header);

             

           
          ////////////////////echo("mensaje: " . $message. "<br>". "Mail: " . $para );

          session_destroy();
        }else  {

          echo '<script>alert( "no se pudo realizar el ingreso")</script>' ; 
          session_destroy();
          
        }


      } else {   echo '<script>alert( "El contacto ya existe")</script>)'; 

         //die(); ; 
         session_destroy();
         
      }
    }

    session_destroy();

?>
