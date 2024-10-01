<?php
    if(!empty($_GET["apellidos"])){
        echo 'Nombre: '.$_GET["nombre"].'<br/><br/>';
    }else{
        echo "Falta el nombre.<br/><br/>";
    }

    if(!empty($_GET["apellidos"])){
        echo 'Apellidos: '.$_GET["apellidos"].'<br/><br/>';
    }else{
        echo "Faltan los apellidos.<br/><br/>";
    }

    if(isset($_GET["testigo"])){
        echo 'Testigo: '.$_GET["testigo"].'<br/><br/>';
    }else{
        echo "Testigo no indicado.<br/><br/>";
    }

    if(isset($_GET["terminos"])){
        echo 'Terminos: '.$_GET["terminos"].'<br/><br/>';
    }else{
        echo "No ha indicado si acepta los terminos.<br/><br/>";
    }

    if(isset($_GET["rInformacion"])){
        echo 'Terminos: '.$_GET["rInformacion"].'<br/><br/>';
    }else{
        echo "No ha indicado si acepta recibir informacion.<br/><br/>";
    }

    if(!empty($_GET["fecha"])){
        echo 'Fecha: '.$_GET["fecha"].'<br/><br/>';
    }else{
        echo "Falta la fecha.<br/><br/>";
    }

    if(!empty($_GET["lugar"])){
        echo 'Lugar: '.$_GET["lugar"].'<br/><br/>';
    }else{
        echo "Falta el lugar.<br/><br/>";
    }

    if(!empty($_GET["tipo"])){
        echo 'Tipo: '.$_GET["tipo"].'<br/><br/>';
    }else{
        echo "Falta el tipo.<br/><br/>";
    }

    if(!empty($_GET["descripcion"])){
        echo 'Descripcion: '.$_GET["descripcion"].'<br/><br/>';
    }else{
        echo "Falta la descripcion.<br/><br/>";
    }
    if(isset($_GET["informacion"])){
        echo "Recibira informacion sobre:<br/>";
       foreach($_GET["informacion"] as $indice => $dato){
            echo $dato."<br/>";
        }
    }else{
        echo "No quiere recibir informacion";   
    }
?>