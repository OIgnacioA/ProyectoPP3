<?php



 $rol = $_SESSION['Rol'];

 if ( isset($_POST["send"])) {


 include("../Modelo/Conexion.php");

 include("Alumno.php");


 $nuevoAlumno = new Alumno(); 

 

 $Nom = $_POST["nombre"];
 $Ape = $_POST["apellido"];
 $gen = $_POST["genero"];
 $carr = $_POST["carrera"];
 $FechaN = $_POST["calendarioN"];
 $mail = $_POST["email"];
 $mailC = $_POST["emailC"];
 $cod_A = $_POST["cod"];
 $cod_AC = $_POST["codC"];
 $phone = $_POST["tele"];
 $tel_C = $_POST["telC"];
 $dir = $_POST["direccion"];
 $prov = $_POST["provincia"];
 $loc = $_POST["localidad"];
 $tit = $_POST["titulo"]; 
 $cal_Alt = "01/01/2000";
 $est = "NULL";
 $obs = "NULL";
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
 $emailC = $nuevoAlumno->getEmailC();
 $codA = $nuevoAlumno->getCodA();
 $codAC = $nuevoAlumno->getCodAC();
 $telC = $nuevoAlumno->getTelC();
 $direccion = $nuevoAlumno->getDireccion();
 $provincia = $nuevoAlumno->getProvincia();
 $localidad = $nuevoAlumno->getLocalidad();
 $titulo = $nuevoAlumno->getTitulo();
 $calendarioAlt = "01/01/2000";
 $estado = "NULL";
 $observacion = "NULL";
 $egreso = $nuevoAlumno->getEgreso();



 if ($exi == 0){
 

 if (mysqli_query($conexion, " INSERT INTO alumno (nombre, apellido, fnacimiento, genero, dni, email, cod_area, telefono,contacto_mail,cod_area_cont, telefonocont, direccion, provincia, localidad, titulos, fe_alta, estado, observaciones, pasaporte, rol) values ('$Nombre', '$Apellido', '$FechaNac','$genero', '$DNI','$email', '$codA', '$tel', '$emailC', '$codAC', '$telC','$direccion','$provincia', '$localidad', '$titulo','$calendarioAlt', '$estado', '$observacion', '$pass', 'Alumno')")){
 
 if ($DNI != ""){ 

 $consulta = " SELECT * FROM alumno WHERE dni = $DNI" ;
 
 
 } else if ( $pass != ""){

 $consulta = " SELECT * FROM alumno WHERE dni = $pass" ;
 }

 //Carrera Alumno_carrera*
 
 
 $resultado = mysqli_query($conexion, $consulta);
 $con = mysqli_fetch_array($resultado); 
 $idd = $con["id"];
 $_SESSION['id'] = $idd;


    try {

        mysqli_query($conexion, "INSERT INTO `carreras_alumnos`( `ID_Carrera`, `ID_Alumno`) VALUES ('$carrera','$idd')");

    } catch (Exception $e) {

        echo 'Excepci??n capturada: ',  $e->getMessage(), "\n";
        
    }



 //echo "<script>alert(" . $idd.")</script>";

 echo "<div class=" . "mensaje" . "> N??mero de inscripci??n: <b><br>". $idd
 . "</b><br>La lista de documentos que el alumno debe acercar 
 al instituto para terminar el registro, en la misma se encuentra:<br>
 -> fotocopia del Dni<br>
 -> fotocopia del titulo del secundario/polimodal<br>
 -> foto carnet<br>
 -> certificado m??dico<br>
 -> n??mero de inscripci??n </div>" ; 

 

 ////////////////MAil: 

 $head = ' From: noreply@example.com' . " \r\n";
 $head .='Reply-To: webmaster@example.com' . "\r\n" .
 $head .= "X-Mailer: PHP/" .phpversion() . " \r\n";
 


 $message= " Por medio de la presente se le informa que su preinscripci??n ha sido recepcionada. Por favor, h??gase presente en la instituci??n con la documentaci??n requerida en los horarios de xxxx hs a xxxx hs. ". " \r\n" .

 "Saludos cordiales.". " \r\n" .
 
 "La Administraci??n" . " \r\n" .
 
 "Instituto XXXXXXX". " \r\n" ;

 $para = $email; 
 $asunto = "Pre-inscripcion recepcionada";

 mail($para, $asunto, $message, $head);

 echo '<script>alert( "Ingreso exitoso")</script>' ; 



 /*$arr = array("Director", "Vicedirector","Secretario"); #roles admin

 if(in_array($rol, $arr)){
 
 require_once("../Controlador/Cabeceras.php"); 
 
 }*/

 // 
 
 }else {

 echo '<script>alert( "no se pudo realizar el ingreso")</script>' ; 


 }


 } else { echo '<script>alert( "El contacto ya existe")</script>)'; 

 
 
 }
 }
?>