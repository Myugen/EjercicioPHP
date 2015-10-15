<html>
<head>
	<meta charset="utf-8">
	<title>Operador de omisión de errores</title>
</head>
<body style="text-align: center">
	<h1>Operadores de omisión de errores</h1>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$dividendo = 6;
	$divisor = 0;
	$resultado = 0;
	@$resultado = $dividendo/$divisor;
	$exito = "El resultado de $dividendo/$divisor es: $resultado";
	$error = "Se ha producido un error:  $php_errormsg";
	echo (empty($resultado)) ? $error : $exito;
?>
</body>
</html>
