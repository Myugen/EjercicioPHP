<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Actividad 4.1 - Ejercicio 4</title>
</head>
<body>
	<form action="ejercicio5.php" method="post">
		Introduzca Tipo Moneda 0:<input type="text" name="moneda[]"/><br />
		Introduzca Tipo Moneda 1:<input type="text" name="moneda[]"/><br />
		Introduzca Tipo Moneda 2:<input type="text" name="moneda[]"/><br />
		Introduzca Tipo Cambio 0:<input type="text" name="cambio[]"/><br />
		Introduzca Tipo Cambio 1:<input type="text" name="cambio[]"/><br />
		Introduzca Tipo Cambio 2:<input type="text" name="cambio[]"/><br />
		<input type="submit" value="Enviar" /><br />
	</form>
	<?php
	if(isset($_POST["moneda"]) && isset($_POST["cambio"])) {
		$moneda = $_POST["moneda"];
		$cambio = $_POST["cambio"];
		echo "<table border='1'>";
		echo "<tr bgcolor='grey'><th></th><th>Moneda</th><th>Cambio 1€</th></tr>";
		for($i = 0; $i < 3; $i++)
			echo "<tr><td bgcolor='grey'>\$matriz[$i]</td><td>$moneda[$i]</td><td>$cambio[$i]</td></tr>";
		echo "</table>";
	}
	?>
</body>
</html>