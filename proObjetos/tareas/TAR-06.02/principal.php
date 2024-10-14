<?php
    require_once 'clase.php';
    $objClase = new Fechas();
    $objClase->getFecha($_GET["fecha"]);
    $fecha=$objClase->generarFecha();
    echo $fecha;
?>
