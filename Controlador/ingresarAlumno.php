
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
    $tel = $_POST["tele"];
    $telC =  $_POST["telC"];
    $direccion =  $_POST["direccion"];
    $provincia = $_POST["provincia"];
    $localidad = $_POST["localidad"];
    $titulo = $_POST["titulo"]; 
    $calendarioAlt = "01/01/2000";
    $estado = "NULL";
    $observacion =  "NULL";
    $egreso = $_POST["egreso"];

    $DNI_P = $_POST["dniP"];
    
    
    // asignacion por defecto. 
    $_GLOBALS['$pass']="NULL";
    $_GLOBALS['$dni']="NULL";

    //------------------------------------------DNI o Pass? 
    

    if ($DNI_P !=""){
    

      if ($tipo == 'Dni')  {
        
        $_GLOBALS['$dni'] =  $DNI_P; //para comprobacion
        $DNI =  $DNI_P;//asignacion local
        $pass = "NULL";

      }else {

        $_GLOBALS['$pass']= $DNI_P;//para comprobacion  existente en BBDD -no 
        
        $pass = $DNI_P;//asignacion local
        $DNI = "NULL";

      }
        
      //comprobacion existente-no (retorno) -
      

      include("ControlDNI.php");


      //-------------------------------------------------

      $exi = $_GLOBALS['$existe']; 

      if ($exi == 0){

        


        if (mysqli_query($conexion, " INSERT INTO alumno (nombre, apellido, fnacimiento, genero, dni, email, cod_area, telefono,contacto_mail,cod_area_cont, telefonocont, direccion, provincia, localidad, titulos, fe_alta, estado, observaciones, pasaporte,fk_carrera_id, rol) values ('$Nombre', '$Apellido', '$FechaNac','$genero', '$DNI','$email', '$codA', '$tel', '$emailC', '$codAC', '$telC','$direccion','$provincia', '$localidad', '$titulo','$calendarioAlt', '$estado', '$observacion', '$pass',  '$carrera', 'Alumno')")){
      
          echo '<script>alert( "Se realizó el ingreso exitosamente")</script>' ;
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

  }

 
  
?>
