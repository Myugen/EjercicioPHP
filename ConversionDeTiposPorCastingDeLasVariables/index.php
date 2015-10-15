<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Conversión de tipos por casting de las variables</title>
</head>
<body style="text-align: center">
	<h1>Conversión de tipos por casting de las variables</h1>
	<?php
	$cadena = "3.1416 es el valor de PI";
	echo "El valor de la \$cadena es: " . $cadena . "<br>";
	$valorReal = (float)$cadena * 2;
	$conversionEntero = (int)$valorReal;
	echo "El resultado de calcular el doble de PI es: " . $valorReal . "<br>";
	echo "El resultado de quitar la parte decimal es: " . $conversionEntero . "<br>";
	echo ((isset($cadena)) && !(empty($cadena))) ? "está inicializada<br>" : "no está inicializada<br>";
	echo $valorReal . " es el valor doble de PI";
	?>
</body>
</html>