<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<?php
	function factoresPrimos($numero) {
		if($numero > 0) {
			if($numero == 1) {
				return array(1);
			}
			else {
				$repeticion = 0;
				while($numero > 1) {
					$divisor = 2;
					while($numero % $divisor != 0) {
						if($repeticion != 0) {
							$datos[0] = $divisor;
							$datos[1] = $repeticion;
							$divisores[] = $datos;
						}
						$repeticion = 0;
						$divisor++;
					}
					$repeticion++;
					$numero = $numero / $divisor;
				}
				return $divisores;
			}
		}
		else {
			return false;
		}
	}
	
	?>
	<form action="ejercicio3.php" method="post">
		<input type="text" name="numero" />
		<input type="submit" value="Enviar" />
	</form>
	<?php
	if(isset($_POST["numero"])) {
		$numero = $_POST["numero"];
		if(is_numeric($numero)) {
			$vectorPrimos = factoresPrimos($numero);
			if($numero != false) {
				$tamanioVectorPrimos = count($vectorPrimos); 
				echo "La descomponsición factorial de: <br> $numero => ";
				for($i = 0; $i < $tamanioVectorPrimos; $i++)
					echo $vectorPrimos[$i][0] . " hola " . $vectorPrimos[$i][1] . " ";
			}
		}
		else {
			echo "¡No me seas de letras e introduce un número!";
		}
	}
	?>
</body>
</html>
