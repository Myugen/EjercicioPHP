<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Conversión de variables</title>
</head>
<body style="text-align: center">
	<h1>Conversión de variables</h1>
	<?php 
	$cadena = "747E6";
	echo "El valor de \$cadena es: " . $cadena . "<br>";
	echo "<br>";
	$conversionEntero = intval($cadena);
	echo "El resultado de convertirla en entero es: " . $conversionEntero . "<br>";
	$conversionOctal = intval($cadena, 8);
	echo "El resultado de convertirla en entero octal es: " . $conversionOctal . "<br>";
	$conversionHexadecimal = intval($cadena, 16);
	echo "El resultado de convertirla en entero hexadecimal es: " . $conversionHexadecimal . "<br>";
	$conversionReal = doubleval($cadena);
	echo "El resultado de convertirla en doble es: " . $conversionReal . "<br>";
	$conversionString = strval($cadena);
	echo "El resultado de convertirla en cadena es: " . $conversionString;
	?>
</body>
</html>