<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
	define("MAXFILAS", 10);
	$contador = 0;
	echo "<table border = 1>";
	for($i = 0; $i < MAXFILAS; $i++) {
		if($i%2 == 0)
			echo "<tr bgcolor=grey>";
		else
			echo "<tr>";
		for($j = 0; $j < 20; $j++)
			echo "<td> " . ++$contador . " </td>";
		echo "</tr>";
	}
	?>
</body>
</html>