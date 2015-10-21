<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Resultado Ejercicio 2</title>
</head>
<body>
	<?php
	if(isset($_POST["mascotas"]) && isset($_POST["datos"])) {
		$mascotas = $_POST["mascotas"];
		$datos = $_POST["datos"];
		foreach($mascotas as $indice => $valor)
			echo "Mascota $indice: $valor<br>";
		foreach($datos as $indice => $valor) {
			switch ($indice) {
				case 0:
					$cadena = "Nombre";
					break;
				case 1:
					$cadena = "Apellidos";
					break;
				case 2:
					$cadena = "Email";
					break;
			}
			echo "$cadena: $valor<br>";
		}
	}
	else {
		echo "<h2>Falta ingresar algún dato</h2><br>";
		echo "<h2>Pulse el botón para volver al formulario de ingreso</h2><br>";
		echo "<input type='button' value='Volver' onclick=\"document.location='ejercicio2.php'\">";
	}
	?>
</body>
</html>
