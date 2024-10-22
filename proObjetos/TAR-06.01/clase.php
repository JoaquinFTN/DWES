<?php
    class Operaciones{
        private $numeros = array();
        private $mayor;
        private $menor;
        function __construct(){
            $this->numeros = array(
                "0"=> 0,
                "1"=> 0,
            );
            $this->mayor = 0;
            $this->menor = 0;
        }
        public function getNumeros($numeros){
            $this->numeros=$numeros;
            $this->ordenar();
        }
        private function ordenar(){
            if($this->numeros[0]<$this->numeros[1]){
                $this->mayor=$this->numeros[1];
                $this->menor=$this->numeros[0];
            }else{
                $this->mayor=$this->numeros[0];
                $this->menor=$this->numeros[1];
            }
        }
        public function sumar(){
            return "Suma. ".$this->mayor." + ".$this->menor." = ".($this->mayor + $this->menor);
        }
        public function resta(){
            return "Resta. ".$this->mayor." - ".$this->menor." = ".($this->mayor - $this->menor);
        }
        public function multi(){
            return "Multiplicacion. ".$this->mayor." * ".$this->menor." = ".($this->mayor * $this->menor);
        }
        public function divi(){
            return "Division. ".$this->mayor." / ".$this->menor." = ".($this->mayor / $this->menor);
        }
    }
?>