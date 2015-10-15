<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Uso de gettype() settype() isset() empty()</title>
</head>
<body style="text-align: center">
	<h1>Uso de gettype() settype() isset() empty()</h1>
	<?php
	$cadena = "3.1416 es el valor de PI";
	echo "El valor de la \$cadena es: " . $cadena . "<br>";
	echo "Es de tipo " . gettype($cadena) . "<br>";
	$valorReal = $cadena;
	settype($valorReal, "float");
	$conversionEntero = $valorReal;
	settype($conversionEntero, "int");
	echo "El valor real con sus decimales es: " . $valorReal . "<br>";
	echo "El valor convertido a entero es: " . $conversionEntero . "<br>";
	echo ((isset($cadena)) && !(empty($cadena))) ? "está inicializada<br>" : "no está inicializada<br>";
	echo $valorReal . " es el valor de PI y " . $conversionEntero . " su parte entera.";
	?>
</body>
</html>