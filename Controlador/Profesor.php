<?php

require_once("Persona.php");

class Profesor  extends Persona{

    private  $titulo; 


    function persona() {
        parent::__construct(); 
        $this->$titulo = "Null";

    }


 /*//////////////////////////////////*/


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
}

?>