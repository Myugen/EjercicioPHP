<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio examen 1</title>
</head>
<body>
	<?php
		$nombreApellidos = array("Nombre" => "J.Bean", "Apellidos" => "Spinette Tolondreras");
		$callePuerta = array("Calle" => "Dr. Frankenstein", "Numero" => 8);
		$dniSexo = array("DNI" => "42007069X", "Sexo" => "Masculino");
		
		echo("<p>Nombre y Apellidos</p><br>");
		echo("<table border='1'>");
		while(list($clave, $valor) = each($nombreApellidos)) {
			echo("<tr>");
			echo("<td>$clave</td>");
			echo("<td>$valor</td>");
			echo("</tr>");
		}
		echo("</table>");
		
		echo("<p>Calle y Puerta</p><br>");
		echo("<table border='1'>");
		while(list($clave, $valor) = each($callePuerta)) {
			echo("<tr>");
			echo("<td>$clave</td>");
			echo("<td>$valor</td>");
			echo("</tr>");
		}
		echo("</table>");
		
		echo("<p>DNI y Sexo</p><br>");
		echo("<table border='1'>");
		while(list($clave, $valor) = each($dniSexo)) {
			echo("<tr>");
			echo("<td>$clave</td>");
			echo("<td>$valor</td>");
			echo("</tr>");
		}
		echo("</table>");
		
		echo("<p><center> Datos Personales <center></p>");
		$datos = array_merge($dniSexo, $nombreApellidos, $callePuerta);
		echo("<table border='1'>");
		echo("<tr>");
		echo("<td>DNI</td>");
		echo("<td>Sexo</td>");
		echo("<td>Nombre</td>");
		echo("<td>Apellidos</td>");
		echo("<td>Calle</td>");
		echo("<td>Número</td>");
		echo("</tr>");
		echo("<tr>");
		foreach($datos as $indice => $valor) {
			echo "<td>" . $valor . "</td>";
		}
		echo("</tr>");
		echo("</table>");
	?>
</body>
</html>

