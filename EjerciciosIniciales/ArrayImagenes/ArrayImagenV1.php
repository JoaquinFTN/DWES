<?php
	$imagenes=array(
		"flor"=>"flores.webp",
		"casa"=>"casa.webp",
		"camion"=>"camion.jpg",
		"espacio"=>"espacio.jpg"
	);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<table>
			<tbody>
				<?php
					foreach($imagenes as $indice => $valor){
						echo '<tr><td><p>'.$indice.'</p></td><td><img src="imagen/'.$valor.'"/></td></tr>';
					}
				?>
			</tbody>
		</table>
	</body>
</html>