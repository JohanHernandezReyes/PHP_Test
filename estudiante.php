<?php

require_once ("Persona.php");

class Estudiante extends Persona{

    private $curso;

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($value){
        $this->curso=$value;
    }

    public function __construct($nombre, $curso){
        $this->nombre=$nombre;
        $this->curso=$curs;
    }

    public static $variable_estatica = "soy";

    public static function metodo_hijo(){
        echo parent::metodo_estatico(). "<br>";
        echo self:: $variable_estatica;
    }
}

?>