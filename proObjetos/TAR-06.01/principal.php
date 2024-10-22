<?php
    require_once 'clase.php';
    $objClase = new Operaciones;
    $objClase->getNumeros($_GET["numero"]);
    echo $objClase->sumar()."<br/>";
    echo $objClase->resta()."<br/>";
    echo $objClase->multi()."<br/>";
    echo $objClase->divi()."<br/>";
?>