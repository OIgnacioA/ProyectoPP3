<?php

error_reporting(0);


$dni = $_GLOBALS['$dni'];
$pass = $_GLOBALS['$pass'];
$_GLOBALS['$existe'] = 0; 


include("../Modelo/Conexion.php");

    if ($dni !="NULL") {

 
        $consultaAl = "SELECT alumno.dni FROM alumno";  
        $resultado = mysqli_query($conexion,$consultaAl);
  
        while($consulta = mysqli_fetch_array($resultado)){
     

            if( $consulta['dni'] == $dni){
                
             $_GLOBALS['$existe'] = 1; 
                break;
            }
        }


        if ($existe == 0) {

            $consultaAl = "SELECT personal.dni FROM personal";  
            $resultado = mysqli_query($conexion,$consultaAl);

            while($consulta = mysqli_fetch_array($resultado)){
           
                if( $consulta['dni'] == $dni){
    
                 $_GLOBALS['$existe'] = 1; 
                    break;
                }
            }
        }

        if ($existe == 0) {

            $consultaAl = "SELECT profesor.dni FROM profesor";  
            $resultado = mysqli_query($conexion,$consultaAl);
    
    
            while($consulta = mysqli_fetch_array($resultado)){

                if( $consulta['dni'] == $dni){
    
                 $_GLOBALS['$existe'] = 1; 
                    break;
                }
            }
        }


    }
    
    if ($pass!="NULL") {

        
        $consultaAl = "SELECT alumno.pasaporte FROM alumno";  
        $resultado = mysqli_query($conexion,$consultaAl);
     
       
        while($consulta = mysqli_fetch_array($resultado)){
            
            if( $consulta['pasaporte'] == $pass){

             $_GLOBALS['$existe'] = 1; 
                break;
            }
        }
       
        if ($existe == 0) {

            $consultaAl = "SELECT personal.pasaporte FROM personal";  
            $resultado = mysqli_query($conexion,$consultaAl);
    
    
            while($consulta = mysqli_fetch_array($resultado)){
    
    
                if( $consulta['pasaporte'] == $pass){
    
                 $_GLOBALS['$existe'] = 1; 
                    break;
                }
            }
        }
      
        if ($existe == 0) {

            $consultaAl = "SELECT profesor.pasaporte FROM profesor";  

            $resultado = mysqli_query($conexion,$consultaAl);
    
    
            while($consulta = mysqli_fetch_array($resultado)){
    
                

                if( $consulta['pasaporte'] == $pass){
    
                 $_GLOBALS['$existe'] = 1; 
                    break;
                }
            }
        }


    }

?>