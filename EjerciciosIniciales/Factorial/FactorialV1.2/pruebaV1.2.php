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
					$factorial;
					$factorial=factorial($num);
					echo "<tr><td>".$num."</td><td>".$factorial."</td></tr>";
				?>
			</tbody>
		</table>
	</body>
</html>