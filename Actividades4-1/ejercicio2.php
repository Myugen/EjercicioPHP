<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<?php
	if(isset($_GET["vector"])) {
		$vectorInicial = $_GET["vector"];
		$tamanioVector = count($vectorInicial);
		echo "El vector tiene $tamanioVector elementos <br>";
		$resultado = 0;
		for($i = 0; $i < $tamanioVector; $i++) {
			echo "$i = $vectorInicial[$i]<br>";
			$resultado += $vectorInicial[$i];
		}
		echo "El resultado de la suma es: $resultado";
	}
	?>
	<form action="ejercicio2.php" method="get">
		<input type="text" name="numeroCeldas" /><br>
		<input type="submit" value="Enviar" />
	</form>
	<?php
	if(isset($_GET["numeroCeldas"])) {
		$numeroCeldas = $_GET["numeroCeldas"];
		echo "<form action='ejercicio2.php' method='get'>";
		for($i = 0; $i < $numeroCeldas; $i++) {
			echo "$i <input type='text' name='vector[]' /> <br>";
		}
		echo "<input type='submit' value='Enviar' />";
		echo "</form>";
	}
	?>
</body>
</html>

