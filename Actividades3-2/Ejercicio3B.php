<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 3 - Caso B</title>
</head>
<body>
	<?php
	for($k = 0; $k < 10; $k++) {
		if($k > 4)
			continue;
		for($j = 0; $j < 10; $j++) {
			if($j != ($k + 1))
				continue;
			for($i = 0; $i < 10; $i++) {
				if($i != 1)
					continue;
				echo "El valor de k es: $k y el valor de j es: $j y el valor de i es: $i<br/>";
			}
		}
	}
	?>
</body>
</html>
