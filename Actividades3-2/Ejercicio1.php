<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>Tablas con matrices unidimensionales sencillas</h1>
	<?php
	$cabeceraTabla[0] = "";
	$cabeceraTabla[1] = "Modelo";
	$cabeceraTabla[2] = "Marca";
	$cabeceraTabla[3] = "Fecha";
	$cabeceraTabla[4] = "CC";
	$cabeceraTabla[5] = "Motor";
	$cabeceraTabla[6] = "Potencia";
	$cabeceraTabla[7] = "Combustible";
	$matriz1 = array("matriz1", "Giulietta", "Alfa Romeo", "", number_format(1598, 0, ",", "."), "4 cilindros en línea con correa dentada con empujadores hidráulicos - 4v", 182, "Diésel");
	$matriz2 = array("matriz2", "A5 2.0", "Audi", "", number_format(1984, 0, ",", "."), "4 cilindros en línea, inyección directa TFSI - 16v", 211, "Gasolina");
	echo "<table border='1' align='center'>";
	for($i = 0; $i < 3; $i++ ) {
		echo "<tr>";
		for($j = 0; $j < count($cabeceraTabla); $j++) {
			if($i == 0) 
				echo "<th bgcolor=grey> $cabeceraTabla[$j] </th>";
			if($i == 1)
				echo "<td> $matriz1[$j] </td>";
			if($i == 2)
				echo "<td> $matriz2[$j] </td>";
		}
		echo "</tr>";
	}
	echo "</table>"
	?>
</body>
</html>