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
					$num=10;
					$factoriales[0]=1;
					for($i=1; $i<=$num; $i++){
						$factoriales[$i]=calcFactorial($i);
					}
					for ($i=0; $i <count($factoriales); $i++){
						echo "<tr><td>".$i."</td><td>".$factoriales[$i]."</td></tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>