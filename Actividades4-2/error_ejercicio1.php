<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Validación Ejercicio 1</title>
</head>
<body>
	<?php
	if((!empty($_POST["nombre"])) && (!empty($_POST["dni"]))) {
		$nombre = $_POST["nombre"];
		$dni = $_POST["dni"];
		if(isset($_POST["sueldo"]))
			$sueldo = $_POST["sueldo"];
		else
			$sueldo = 0;
		if($sueldo > 2000)
			echo "$nombre tiene un sueldo ineficiente";
		else
			echo "$nombre tiene un sueldo eficiente";
	}
	else {
		echo "<h2>Falta ingresar algún dato</h2><br>";
		echo "<h2>Los datos marcados con (*) son obligatorios</h2><br>";
		echo "<h2>Pulse el botón para volver al formulario de ingreso</h2><br>";
		echo "<input type='button' value='Volver' onclick=\"document.location='ejercicio1.php'\">";
	}
	?>
</body>
</html>
