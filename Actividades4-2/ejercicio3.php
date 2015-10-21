<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 4</title>
</head>
<body>
	<form action="ejercicio3.php" method="post">
	<label for="textPrecio0">Precio 0:</label><input type="text" id="textPrecio0" name="datos[]"/><br>
	<label for="textPrecio1">Precio 1:</label><input type="text" id="textPrecio1" name="datos[]"/><br>
	<label for="textPrecio2">Precio 2:</label><input type="text" id="textPrecio2" name="datos[]"/><br>
	<input type="submit" value="Recoger datos" />
	</form>
	<?php
	function convertirEurosAUSD($euro) {
		return $euro * 1.29710;
	}
	
	function convertirEurosAGBP($euro) {
		return $euro * 0.807292;
	}
	
	function convertirEurosAJPY($euro) {
		return $euro * 106.518;
	}
	
	function construirTablaConversion($datos) {
		echo "<table border='1'>";
		echo "<tr bgcolor='grey'><td>Euros</td><td>USD</td><td>GBP</td><td>JPY</td></tr>";
		for($i = 0; $i < count($datos); $i++) {
			$aUSD = convertirEurosAUSD($datos[$i]);
			$aGBP = convertirEurosAGBP($datos[$i]);
			$aJPY = convertirEurosAJPY($datos[$i]);
			echo "<tr>";
			echo "<td>" . sprintf("%05.2f", $datos[$i]) . "</td>";
			echo "<td>" . sprintf("%05.2f", $aUSD) . "</td>";
			echo "<td>" . sprintf("%05.2f", $aGBP) . "</td>";
			echo "<td>" . sprintf("%05.2f", $aJPY) . "</td>";
			echo "</tr>";
		}
	}
	
	if(isset($_POST["datos"])) {
		$datos = $_POST["datos"];
		construirTablaConversion($datos);
	}
	else
		construirTablaConversion(Array (0));
	?>
</body>
</html>
