<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Trabajando con constantes</title>
</head>
<body style="text-align: center">
	<h1>Trabajando con constantes</h1>
	<?php
	define("EURO", 166.386);
	echo "El valor de la constante 'EURO' es: " . EURO ."<br>";
	$cantidadEuros = 1;
	$conversionEurosAPesetas = EURO * $cantidadEuros;
	echo "Luego " . $cantidadEuros . "€ son " . $conversionEurosAPesetas ."ptas <br>";
	echo "<br>";
	echo "La constante 'CENTIMO' "; 
	echo (defined(CENTIMO)) ? "está " : "no está "; 
	echo " definida.<br>";
	define("CENTIMO", number_format(EURO/100, 2));
	echo "El valor de la constante 'CENTIMO' es: " . CENTIMO;
	?>
</body>
</html>

