<?php

require_once("Persona.php"); //esto estaria funcionando igual que en "include"



class Alumno extends Persona {

    private $carrera = "Null";
    private $genero = "Null";
    private $FechaNac = "Null";
    private $tipo = "Null";
    private $emailC = "Null";
    private $codA = "Null";  
    private $codAC = "Null";
    private $telC = "Null";
    private $direccion = "Null";
    private $provincia = "Null";
    private $localidad = "Null";
    private $titulo = "Null";
    private $calendarioAlt = "Null";  
    private $estado = "Null";
    private $observacion = "Null";
    private $egreso = "Null";
    private $FechaCambio = "Null";
   

    function Alumno(){ 
  
        parent::__construct();  
       
        $this->$carrera = "Null";
        $this->$genero = "Null";
        $this->$FechaNac = "Null";
        $this->$tipo = "Null";
        $this->$emailC = "Null";
        $this->$codA = "Null";  
        $this->$codAC = "Null";
        $this->$telC = "Null";
        $this->$direccion = "Null";
        $this->$provincia = "Null";
        $this->$localidad = "Null";
        $this->$titulo = "Null";
        $this->$calendarioAlt = "Null";  
        $this->$estado = "Null";
        $this->$observacion = "Null";
        $this->$egreso = "Null";
        $this->$FechaCambio = "Null";
       

    }


    //////////seters//////Getters /////////////////////////////////////////////// 


 
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
  
       
  
  
        //-------------------------------------------------
  
        


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

        /**
         * Get the value of genero
         */ 
        public function getGenero()
        {
                return $this->genero;
        }

        /**
         * Set the value of genero
         *
         * @return  self
         */ 
        public function setGenero($genero)
        {
                $this->genero = $genero;

                return $this;
        }

        /**
         * Get the value of FechaNac
         */ 
        public function getFechaNac()
        {
                return $this->FechaNac;
        }

        /**
         * Set the value of FechaNac
         *
         * @return  self
         */ 
        public function setFechaNac($FechaNac)
        {
                $this->FechaNac = $FechaNac;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of emailC
         */ 
        public function getEmailC()
        {
                return $this->emailC;
        }

        /**
         * Set the value of emailC
         *
         * @return  self
         */ 
        public function setEmailC($emailC)
        {
                $this->emailC = $emailC;

                return $this;
        }

        /**
         * Get the value of codA
         */ 
        public function getCodA()
        {
                return $this->codA;
        }

        /**
         * Set the value of codA
         *
         * @return  self
         */ 
        public function setCodA($codA)
        {
                $this->codA = $codA;

                return $this;
        }

        /**
         * Get the value of codAC
         */ 
        public function getCodAC()
        {
                return $this->codAC;
        }

        /**
         * Set the value of codAC
         *
         * @return  self
         */ 
        public function setCodAC($codAC)
        {
                $this->codAC = $codAC;

                return $this;
        }

        /**
         * Get the value of telC
         */ 
        public function getTelC()
        {
                return $this->telC;
        }

        /**
         * Set the value of telC
         *
         * @return  self
         */ 
        public function setTelC($telC)
        {
                $this->telC = $telC;

                return $this;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        /**
         * Get the value of provincia
         */ 
        public function getProvincia()
        {
                return $this->provincia;
        }

        /**
         * Set the value of provincia
         *
         * @return  self
         */ 
        public function setProvincia($provincia)
        {
                $this->provincia = $provincia;

                return $this;
        }

        /**
         * Get the value of localidad
         */ 
        public function getLocalidad()
        {
                return $this->localidad;
        }

        /**
         * Set the value of localidad
         *
         * @return  self
         */ 
        public function setLocalidad($localidad)
        {
                $this->localidad = $localidad;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of calendarioAlt
         */ 
        public function getCalendarioAlt()
        {
                return $this->calendarioAlt;
        }

        /**
         * Set the value of calendarioAlt
         *
         * @return  self
         */ 
        public function setCalendarioAlt($calendarioAlt)
        {
                $this->calendarioAlt = $calendarioAlt;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of observacion
         */ 
        public function getObservacion()
        {
                return $this->observacion;
        }

        /**
         * Set the value of observacion
         *
         * @return  self
         */ 
        public function setObservacion($observacion)
        {
                $this->observacion = $observacion;

                return $this;
        }

        /**
         * Get the value of egreso
         */ 
        public function getEgreso()
        {
                return $this->egreso;
        }

        /**
         * Set the value of egreso
         *
         * @return  self
         */ 
        public function setEgreso($egreso)
        {
                $this->egreso = $egreso;

                return $this;
        }

     

    /**
     * Get the value of FechaCambio
     */ 
    public function getFechaCambio()
    {
        return $this->FechaCambio;
    }

    /**
     * Set the value of FechaCambio
     *
     * @return  self
     */ 
    public function setFechaCambio($FechaCambio)
    {
        $this->FechaCambio = $FechaCambio;

        return $this;
    }
}



?>


