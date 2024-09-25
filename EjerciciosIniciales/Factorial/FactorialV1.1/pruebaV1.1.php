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
					$i;
					$y;
					$calc=1;
					for($y=0; $y<10; $y++){
						if($y==0){
							$factoriales[0]=1;
						}else{
							for ($i=1; $i<=$y; $i++){
								$calc=$calc*$i;
							}
							$factoriales[$y]=$calc;
						}
						$calc=1;
					}
					for ($i=0; $i <10; $i++){
						echo "<tr><td>".$i."</td><td>".$factoriales[$i]."</td></tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>