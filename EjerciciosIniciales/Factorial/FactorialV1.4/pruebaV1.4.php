<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<td>Número</td>
					<td>Factorial</td>
				</tr>
			</thead>
			<tbody>
				<?php
					require_once "funciones.php";
					$factoriales[0]=1;
					for($i=1; $i<=10; $i++){
						$factoriales[$i]=calcFactorial($i);
					}
					foreach($factoriales as $indice => $valor){
						echo "<b>".$indice." </b>".$valor."<br/>";
					}
					foreach($factoriales as $indice => $valor){
						echo "<tr><td>".$indice."</td><td>".$valor."</td></tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>