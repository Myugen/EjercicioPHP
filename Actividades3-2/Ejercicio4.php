<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 4</title>
</head>
<body>
	<?php
	$base = 0;
	$exponente = 0;
	echo "<table border=1>";
	for($i = 1; $i <= 4; $i++) {
		echo "<tr>";
		for($j = 1; $j <= 4; $j++) {
			echo "<td>" . pow($i, $j) . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>