<?php
    require_once 'clase.php';
    $objClase = new Fechas();
    $objClase->getFecha($_GET["fecha"]);
    echo $fecha=$objClase->generarFecha()."<br/><br/>";
    echo "Febrero tiene ".$objClase->febrero." días";
?>