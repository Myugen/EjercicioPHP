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
				$datos[0] = 1;
				$datos[1] = 1;
				$divisores[] = $datos;
				return $divisores;
			}
			else {
				$divisor = 2;
				while($numero > 1) {
					$repeticion = 0;
					while($numero % $divisor == 0) {
						$repeticion++;
						$numero /= $divisor;
					}
					if($repeticion != 0) {
						$datos[0] = $divisor;
						$datos[1] = $repeticion;
						$divisores[] = $datos;
					}
					$divisor++;
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
				echo "La descomponsición factorial de: <br> $numero = ";
				for($i = 0; $i < $tamanioVectorPrimos; $i++)
					if($i != ($tamanioVectorPrimos - 1))
						echo $vectorPrimos[$i][0] . "<sup>" . $vectorPrimos[$i][1] . "</sup> * ";
					else 
						echo $vectorPrimos[$i][0] . "<sup>" . $vectorPrimos[$i][1] . "</sup>";
			}
			else {
				echo "¡El número debe ser mayor de mayor que 0!";
			}
		}
		else {
			echo "¡No me seas de letras e introduce un número!";
		}
	}
	?>
</body>
</html>

