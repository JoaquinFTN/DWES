<?php
    class Ejemplo{
        /*Con private no podriamos usar la referencia en usarClae.php*/
        public int $dato;
        function metodo1(){
            $this->dato=25;
        }
    }
?>