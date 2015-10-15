<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 3 - Caso A</title>
</head>
<body>
	<?php
	for($j = 0; $j < 5; $j++) {
		if($j == 0)
			continue;
		for($i = 0; $i < 3; $i++) {
			if($i == 0)
				continue;
			echo "El valor de j es: $j y el valor de i es: $i<br/>";
		}
	}
	?>
</body>
</html>