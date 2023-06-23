<?php

class Persona{

    protected $nombre;
    protected $identificacion;
    protected $fechanacimiento;
    
    public function __construct($nombre, $identificacion, $fechanacimiento)
    {
        $this->nombre=$nombre;
        $this->identificacion=$identificacion;
        $this->fechanacimiento=$fechanacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($value)
    {
        $this->nombre=$value;
    }

    
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    public function setIdentificacion($value)
    {
        $this->identificacion=$value;
    }

    
    public function getfechanacimiento()
    {
        return $this->fechanacimiento;
    }

    public function setfechanacimiento($value)
    {
        $this->fechanacimiento=$value;
    }

    public function leer($libro)
    {
        return $this->nombre . " está leyendo " . $libro; 
    }

    public static function metodo_estatico()
    {
        echo "<br><h3 style='color:blue'>Metodo estático de la persona</h3>";
    }
}


// $Persona1 = new Persona("Camilo", "1012456789", "16-06-2005");
// echo $Persona1->leer("El capital");

// $Persona1->setNombre("Jose Camilo");
// echo "<br>", $Persona1->leer("El capital");

?>