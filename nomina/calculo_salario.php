<?php
    class Empleado{
        protected $identificacion;
        protected $nombre;
        protected $cargo;

        function __construct($identificacion, $nombre, $cargo)
        {
            $this->$identificacion = $identificacion;
            $this->$nombre = $nombre;
            $this->$cargo = $cargo;
        }

        public function getcargo()
        {
            return $this->cargo;
        }
        
        public function getidentificacion()
        {
            return $this->identificacion;
        }
        
        public function getnombre()
        {
            return $this->nombre;
        }
        
        public function setcargo($value)
        {
            $this->cargo=$value;
        }

        public function setidentificacion($value)
        {
            $this->identificacion=$value;
        }

        public function setnombre($value)
        {
            $this->nombre=$value;
        }
    }

    class Contratista extends Empleado{
        private $totalHoras;
        private $valorHora;

        public function gettotalHoras()
        {
            return $this->totalHoras;
        }
        
        public function getvalorHoras()
        {
            return $this->valorHora;
        }

        public function settotalHoras($value)
        {
            $this->totalHoras=$value;
        }
        
        public function setvalorHora($value)
        {
            $this->valorHora=$value;
        } 

        public function calcular_salario()
        {
            return $this->totalHoras * $this->valorHora;
        }
    }

    class Planta extends Empleado{
        private $deducciones;
        private $sueldoBasico;
        private $valorExtras;

        public function getdeducciones()
        {
            return $this->deducciones;
        }
        
        public function getsueldoBasico()
        {
            return $this->sueldoBasico;
        }

        public function getvalorExtras()
        {
            return $this->valorExtras;
        }

        public function setdeducciones($value)
        {
            $this->deducciones=$value;
        }
        
        public function setsueldoBasico($value)
        {
            $this->sueldoBasico=$value;
        } 

        public function setvalorExtras($value)
        {
            $this->valorExtras=$value;
        } 

        public function calcular_salario()
        {
            return $this->sueldoBasico + $this->valorExtras - $this->deducciones;
        }
    }

    $tipo=$_GET["tipo"];
    $resultado="";
    if($tipo==1)
    {
        $EmpContratista = new Contratista($_GET["identificacion"], $_GET["nombre"], $_GET["cargo"]);
        $EmpContratista->settotalHoras($_GET["totalHoras"]);
        $EmpContratista->setvalorHora($_GET["valorHora"]);
        $EmpContratista->setnombre($_GET["nombre"]);
        $EmpContratista->setidentificacion($_GET["identificacion"]);
        $EmpContratista->setcargo($_GET["cargo"]);
        $resultado = "El salario a pagar del contratista ".$EmpContratista->getnombre()." con CC N° " . $EmpContratista->getidentificacion() . " es: $".$EmpContratista->calcular_salario();  
    }
    else if($tipo==2)
    {
        $EmpPlanta = new Planta($_GET["identificacion"], $_GET["nombre"], $_GET["cargo"]); 
        $EmpPlanta->setsueldoBasico($_GET["sueldoBasico"]);
        $EmpPlanta->setvalorExtras($_GET["valorExtras"]);
        $EmpPlanta->setdeducciones($_GET["deducciones"]);
        $EmpPlanta->setnombre($_GET["nombre"]);
        $EmpPlanta->setidentificacion($_GET["identificacion"]);
        $EmpPlanta->setcargo($_GET["cargo"]);
        $resultado = "El salario a pagar del empleado ".$EmpPlanta->getnombre(). " con CC N° " . $EmpPlanta->getidentificacion() . " es: $".$EmpPlanta->calcular_salario();
    }    

    include ("nomina.php");

    echo "<br><br><h3>$resultado</h3>";
?>