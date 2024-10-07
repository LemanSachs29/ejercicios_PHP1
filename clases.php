<?php

class Persona{

    //Atributos
    public $nombre;
    public $edad;

    //Constructores

    public function _construct($pNombre, $pEdad){

       $this->nombre=$pNombre;
       $this->edad=$pEdad;
    }

    public function saludar(){

        echo "Hola, mi nombre es " .$this->$nombre . 
                " , y tengo " .$this->$edad" años.";
    }

    
}


$miPersona = new Persona("Juan", 24);
$miPersona->saludar();
?>