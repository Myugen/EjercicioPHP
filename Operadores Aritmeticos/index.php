<html>
<head>
	<meta charset="utf-8">
	<title>Operadores aritméticos</title>
</head>
<body style="text-align: center">
	<h1>Operadores aritméticos</h1>
<?php
	define("EURO", 166.386);
	echo "El valor de la constante 'euro' es: <strong>" . EURO . " ptas</strong><br>";
	$cantidadEuro = 1000;
	$cantidadPesetas = 1000;
	$conversionEuroAPeseta = $cantidadEuro * EURO;
	$conversionPesetaAEuro = $cantidadPesetas / EURO;
	echo $cantidadEuro . "€ son " . number_format($conversionEuroAPeseta, 0, ",", ".") . " ptas <br>";
	echo $cantidadPesetas . " ptas son " . number_format($conversionPesetaAEuro, 2, ",", ".") . "€ <br>";
	$cantidadDinero = 157;
	$conteo = $cantidadDinero;
	$billete = 50;
	$cantidadBilletes = 0;
	while($conteo >= $billete) {
		$conteo -= $billete;
		$cantidadBilletes++;
	}
	echo $cantidadDinero . "€ son " . $cantidadBilletes . " billete/s de " . $billete . "€ y " . $conteo . "€";
?>
</body>
</html>