<?php

  error_reporting(0);

  


  if ( isset($_POST["UpDate"]))  {


   include("../Modelo/Conexion.php");

   include("Alumno.php");


    $nuevoAlumno = new Alumno(); 

    $id = $_POST["id"]; 
    $tip = $_POST["dniOPas"];
    $Nom = $_POST["nombre"];
    $Ape =  $_POST["apellido"];
    $email =  $_POST["email"];
    $DNIP = $_POST["dniPass"];
    $est = $_POST["estado"];
    $fechaCambio = $_POST["FechaCambio"];

 ///set

    if ($tip != "true") {
        $nuevoAlumno->setPasaporte($DNIP);
    }else {$nuevoAlumno->setDNI($DNIP);}

    $nuevoAlumno->setNombre($Nom);
    $nuevoAlumno->setApellido($Ape);
    $nuevoAlumno->setMail($email);
    $nuevoAlumno->setEstado($est);
    $nuevoAlumno->setFechaCambio($fechaCambio);
   
///get

    if ($tip != "true") {
        $pass = $nuevoAlumno->getPasaporte();
    }else {$DNI = $nuevoAlumno->getDNI();}

    

    $Nombre = $nuevoAlumno->getNombre();
    $Apellido = $nuevoAlumno->getApellido();
    $email = $nuevoAlumno->getMail();
    $estado = $nuevoAlumno->getEstado();
    $fechaC =  $nuevoAlumno->getFechaCambio();


    echo "-----". $fechaC ;

    if ($tip != "true") {//si es pasaporte

        

        if (mysqli_query($conexion, "  UPDATE alumno SET  estado = '$estado' , nombre = '$Nombre', apellido = '$Apellido', pasaporte = '$pass', email = '$email', FechaCambio = $fechaC
        WHERE id = $id;")){ 

            echo '<script>alert( "se realizó el Update ")</script>)' ; 
                    
        }else {echo '<script>alert( "no se pudo realizar el UpDate")</script>' ; }

        header('Location:../Vista/Preceptor_administraralumnos.php');
        

    }else{//si es dni

      

        if (mysqli_query($conexion, "  UPDATE alumno SET  estado = '$estado' , nombre = '$Nombre', apellido = '$Apellido', dni = '$DNI', email = '$email', FechaCambio = $fechaC
        WHERE id = $id;")){ 

            echo '<script>alert( "se realizó el Update ")</script>)' ; 
                    
        }else {echo '<script>alert( "no se pudo realizar el UpDate")</script>' ; }

            header('Location:../Vista/Preceptor_administraralumnos.php');


        

    }

  
   }
   
?>
