<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Actividad 4.1 - Ejercicio 1</title>
</head>
<body>
	<?php
	if(isset($_POST["vector"])) {
		$vectorInicial = $_POST["vector"];
		$tamanioVector = count($vectorInicial);
		echo "El vector tiene $tamanioVector elementos <br>";
		$resultado = 0;
		for($i = 0; $i < 8; $i++) {
			echo "$i = $vectorInicial[$i]<br>";
			$resultado += $vectorInicial[$i];
		}
		echo "El resultado de la suma es: $resultado";
	}
	?>
	<form action="ejercicio1.php" method="post">
		<?php
		for($i = 0; $i < 8; $i++)
			echo "$i <input type='text' name='vector[]'/><br>";
		?>
		<input type="submit" value="Enviar" />
	</form>
</body>
</html>
