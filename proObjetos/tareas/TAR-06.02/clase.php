<?php
    class Fechas{
        private $meses_dias = array();
        private $fecha = array();
        function __construct(){
            $this->meses_dias = array(
                '01' => array(
                    "mes" => "Enero",
                    "dias" => 31
                ),
                '02' => array(
                    "mes" => "Febrero",
                    "dias" => 29
                ),
                '03' => array(
                    "mes" => "Marzo",
                    "dias" => 31
                ),
                '04' => array(
                    "mes" => "Abril",
                    "dias" => 30
                ),
                '05' => array(
                    "mes" => "Mayo",
                    "dias" => 31
                ),
                '06' => array(
                    "mes" => "Junio",
                    "dias" => 30
                ),
                '07' => array(
                    "mes" => "Julio",
                    "dias" => 31
                ),
                '08' => array(
                    "mes" => "Agosto",
                    "dias" => 31
                ),
                '09' => array(
                    "mes" => "Septiembre",
                    "dias" => 30
                ),
                10 => array(
                    "mes" => "Octubre",
                    "dias" => 31
                ),
                11 => array(
                    "mes" => "Noviembre",
                    "dias" => 30
                ),
                12 => array(
                    "mes" => "Diciembre",
                    "dias" => 31
                )
            );
        }
        public function getFecha($fecha){
            $this->fecha=explode("-", $fecha);
        }
        private function calcularBisiesto($ano){
            if($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)){
                return 29;
            }
            return 28;
        }
        public function generarFecha(){
            $dia = $this->calcularBisiesto($this->fecha[0]);
            if($dia < $this->fecha[2] && $this->fecha[1] == 2){
                return "ERROR: La fecha no es correcta.";
            }else{
                return $this->fecha[2]."/".$this->meses_dias[$this->fecha[1]]['mes']."/".$this->fecha[0];
            }
        }
    }
?>
