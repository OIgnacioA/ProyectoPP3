<?php

class Persona  {

    private  $Nombre; 
    private  $Apellido;
    private  $DNI;
    private  $Mail;
    private  $Pasaporte; 
    private  $rol; 
    private  $telefono; 
    
   


    function persona() {

        $this->$Nombre="Null";
        $this->$Apellido="Null"; 
        $this->$DNI="Null";
        $this->$Mail="Null";
        $this->$Pasaporte="Null";
        $this->$rol = "Null";
        $this->$telefono = "Null";

    }


        /**
         * Get the value of Nombre
         */ 
        public function getNombre()
        {
                return $this->Nombre;
        }

        /**
         * Set the value of Nombre
         *
         * @return  self
         */ 
        public function setNombre($Nombre)
        {
                $this->Nombre = $Nombre;

                return $this;
        }

        /**
         * Get the value of Apellido
         */ 
        public function getApellido()
        {
                return $this->Apellido;
        }

        /**
         * Set the value of Apellido
         *
         * @return  self
         */ 
        public function setApellido($Apellido)
        {
                $this->Apellido = $Apellido;

                return $this;
        }

        /**
         * Get the value of DNI
         */ 
        public function getDNI()
        {
                return $this->DNI;
        }

        /**
         * Set the value of DNI
         *
         * @return  self
         */ 
        public function setDNI($DNI)
        {
                $this->DNI = $DNI;

                return $this;
        }

        /**
         * Get the value of Mail
         */ 
        public function getMail()
        {
                return $this->Mail;
        }

        /**
         * Set the value of Mail
         *
         * @return  self
         */ 
        public function setMail($Mail)
        {
                $this->Mail = $Mail;

                return $this;
        }

        /**
         * Get the value of Pasaporte
         */ 
        public function getPasaporte()
        {
                return $this->Pasaporte;
        }

        /**
         * Set the value of Pasaporte
         *
         * @return  self
         */ 
        public function setPasaporte($Pasaporte)
        {
                $this->Pasaporte = $Pasaporte;

                return $this;
        }

        /**
         * Get the value of rol
         */ 
        public function getRol()
        {
                return $this->rol;
        }

        /**
         * Set the value of rol
         *
         * @return  self
         */ 
        public function setRol($rol)
        {
                $this->rol = $rol;

                return $this;
        }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }
}

?>