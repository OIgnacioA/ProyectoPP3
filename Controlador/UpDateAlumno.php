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
    $Carr = $_POST["carrera"];

    
    
 
   $CarrArr=[];
    for ($i = 0; $i<strlen($Carr);$i++){

        if($Carr[$i] !=";"){
           
            $var .=$Carr[$i];
           
        }else { 

        
         array_push($CarrArr, $var);
        
         $var="";
            
        }

    }


    /////////////////////////////////////////eliminacion de carrera: 

  
    $CarrerasDDBB = [];
    $CarreraDeAlumno =[];

    $consultar = "  SELECT ca.nombre, ca.id  FROM `carrera` as ca 

    join carreras_alumnos C on (ca.id = C.ID_Carrera)
    join alumno a on (a.id = C.ID_Alumno)
    where a.id = $id ";

    $result =mysqli_query($conexion, $consultar);

    while($consult = mysqli_fetch_array($result)){


        $NombreCarrera= $consult["nombre"];
        $IdCarrera =  $consult["id"];
        
        
        $CarreraDic = ['Nom' => $NombreCarrera, 'ID'=>$IdCarrera];

        array_push($CarrerasDDBB, $CarreraDic);
        array_push($CarreraDeAlumno, $NombreCarrera);
    
    }


    for($i = 0; $i<count($CarrerasDDBB);$i++){
        

        if(in_array($CarrerasDDBB[$i]['Nom'], $CarrArr)){} else {

            $IIDD=$CarrerasDDBB[$i]['ID'];

            mysqli_query($conexion, "  DELETE FROM carreras_alumnos where  ID_Carrera = $IIDD  AND ID_Alumno = $id ;");


        }
    }


   ///////////////////////////////////////////////Agregar carrera: 


    $Diferencia= array_diff($CarrArr, $CarreraDeAlumno);
    $Diferente = $Diferencia[1];
    
    $NombreDeCarreras= [];

    $consultar = "  SELECT ca.nombre, ca.id FROM carrera as ca ";
    $result =mysqli_query($conexion, $consultar);
    while($consult = mysqli_fetch_array($result)){


        $NombreCarrera= $consult["nombre"];
        $IdCarrera =  $consult["id"];

        $CarreraDic2 = ['Nom' => $NombreCarrera, 'ID'=>$IdCarrera];

        array_push($NombreDeCarreras, $CarreraDic2);
    
    }


    for($i=0; $i<count($NombreDeCarreras); $i++){

 

        if ($Diferente == $NombreDeCarreras[$i]['Nom']) {
          
            $idC = $NombreDeCarreras[$i]['ID'];
            
            mysqli_query($conexion, "INSERT INTO  carreras_alumnos (ID_Carrera, ID_Alumno) values ( $idC, $id)");

        }

    }



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




    if ($tip != "true") {//si es pasaporte

        

        if (mysqli_query($conexion, "  UPDATE alumno SET  estado = '$estado' , nombre = '$Nombre', apellido = '$Apellido', pasaporte = '$pass', email = '$email', FechaCambio = '$fechaC'
        WHERE id = $id;")){ 

            echo '<script>alert( "se realizó el Update ")</script>)' ; 
                    
        }else {echo '<script>alert( "no se pudo realizar el UpDate")</script>' ; }

        header('Location:../Vista/Preceptor_administrarAlumnos.php');
        

    }else{//si es dni

      

        if (mysqli_query($conexion, "  UPDATE alumno SET  estado = '$estado' , nombre = '$Nombre', apellido = '$Apellido', dni = '$DNI', email = '$email', FechaCambio = '$fechaC'
        WHERE id = $id;")){ 

            echo '<script>alert( "se realizó el Update ")</script>)' ; 
                    
        }else {echo '<script>alert( "no se pudo realizar el UpDate")</script>' ; }

            header('Location:../Vista/Preceptor_administrarAlumnos.php');


        

    }

  
   }
   
?>
