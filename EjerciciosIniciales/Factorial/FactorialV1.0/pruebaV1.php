<?php
	$i;
	$y;
	$calc=1;
	for($y=0; $y<=10; $y++){
		if($y==0){
			$factoriales[0]=1;
		}else{
			for ($i=1; $i<=count($factoriales); $i++){
				$calc=$calc*$i;
			}
			$factoriales[$y]=$calc;
		}
		$calc=1;
	}
	/*echo count($factoriales)."<br/>"; nos mostrara el numero de celdas del array*/
	/*echo $factoriales; Da un error porque no puede mostrar un array (Notice: Array to string conversion in C:\xampp\htdocs\2daw\dwes\ejerciciosIniciales\Ej-2.1\pruebaV1.1.php on line 16)
	pero podemos poner echo $factoriales[3]*/
	/*print_r ($factoriales); Nos lo muestra asi: Array ( [0] => 1 [1] => 1 [2] => 2 [3] => 6 [4] => 24 [5] => 120 [6] => 720 [7] => 5040 [8] => 40320 [9] => 362880 )*/
	/*var_dump($factoriales); Nos lo muestra asi: array(10) { [0]=> int(1) [1]=> int(1) [2]=> int(2) [3]=> int(6) [4]=> int(24) [5]=> int(120) [6]=> int(720) [7]=> int(5040) [8]=> int(40320) [9]=> int(362880) }*/
	for ($i=0; $i <count($factoriales); $i++){
		echo "El factorial de ".$i." es ".$factoriales[$i]."<br/>";
	}
?>