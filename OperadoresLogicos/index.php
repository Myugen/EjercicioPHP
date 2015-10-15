<html>
<head>
	<meta charset="utf-8">
	<title>Operadores lógicos</title>
</head>
<body style="text-align: center">
	<h1>Operadores lógicos</h1>
<?php
$valorPrimero = 3;
$valorSegundo = 10;
$valorTercero = 9;
echo "Los tres números a comparar son: " . $valorPrimero . ", " . $valorSegundo . " y " . $valorTercero . "<br>";
$valorMayor = ($valorPrimero < $valorSegundo) ? $valorSegundo : $valorPrimero;
$valorMayor = ($valorMayor < $valorTercero) ? $valorTercero : $valorMayor;
echo "El mayor es: " . $valorMayor;
?>
</body>
</html>
