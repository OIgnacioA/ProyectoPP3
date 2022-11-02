<?php

require_once("Persona.php");

class Personal extends Persona {

   
    private $carrera = "Null";


  

    function personal() {

        parent::__construct(); 
        $this->$carrera="Null";
     

    }

    public function comprobarExistencia($Valor, $tipo){

        $DNI_P=$Valor;
       
        $_GLOBALS['$dni'] = "NULL";
        $_GLOBALS['$pass'] = "NULL";

        if ($tipo == 'D')  {
                
               

                $_GLOBALS['$dni'] =  $DNI_P; //para comprobacion
                include("ControlDNI.php");
                $exi = $_GLOBALS['$existe']; 
                return $exi;

        }else {
                
                $_GLOBALS['$pass']= $DNI_P;//para comprobacion  existente en BBDD -no           
                include("ControlDNI.php");
                $exi = $_GLOBALS['$existe']; 
                return $exi;
        }
     
  
    }   


        /**
         * Get the value of carrera
         */ 
        public function getCarrera()
        {
                return $this->carrera;
        }

        /**
         * Set the value of carrera
         *
         * @return  self
         */ 
        public function setCarrera($carrera)
        {
                $this->carrera = $carrera;

                return $this;
        }
}

?>