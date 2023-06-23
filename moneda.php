<?php
    abstract class moneda {
        abstract public function convertir_a_pesos($cantidad, $trm);
    }


    class Dolar extends moneda {
        public function convertir_a_pesos($cantidad, $trm)
        {
            return $cantidad * $trm;
        }
    }
    
    class Euro extends moneda {
        public function convertir_a_pesos($cantidad, $trm)
        {
            return $cantidad * $trm;
        }
    }
?>