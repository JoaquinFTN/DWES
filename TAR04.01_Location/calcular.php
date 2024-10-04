<?php
    /*Devuelve con true o false si un numero es par o impar calculando el resto de un numero al dividirlo entre 2*/
    /*function calcularParImp($num){
        if($num%2==0)
            return true;
        else
            return false;
    }*/
    /*Devuelve con true o false si un numero es par o impar calculando el resto de un numero al dividirlo entre 2
    y calculamos el cuadrado el cual lo retornamos al enviarle a la funcion la variable $cuad por referencia.*/
    function calcularParImp($num, &$cuad){
        $cuad=$num*$num;
        if($num%2==0)
            return true;
        else
            return false;
    }
?>
<?php
    /*$cuad=($_GET["num"] * $_GET["num"]);*/
    $cuad;
    $parImp=calcularParImp($_GET["num"], $cuad);
    /*Preguntamos solo con $parImpar, es mas correcto al ser un booleano en ver de ($parImpar==true o $parImpar==1)
    if($parImp)
        header("Location:par.php?num=".$_GET['num']."&cuadrado=$cuad");
    else
        header("Location:impar.php?num=".$_GET['num']."&cuadrado=$cuad");*/
    /*Usar la funcion directamente en el if tambien funciona y es mas correcto*/
    if(calcularParImp($_GET["num"]))
        header("Location:par.php?num=".$_GET['num']."&cuadrado=$cuad");
    else
        header("Location:impar.php?num=".$_GET['num']."&cuadrado=$cuad");
?>
