<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio examen 2-1</title>
</head>
<body>
	<?php
	function tablaMultipiclar($numero) {
		echo "La tabla del multiplicar del $numero es: <br>";
		for($i = 1; $i <= 10; $i++) {
			echo "$numero * $i = " . ($numero*$i) . "<br>"; 
		}
	}
	?>
</body>
</html>

