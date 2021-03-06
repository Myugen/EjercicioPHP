<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Consultas Base de Datos Vivero de empresas</title>
</head>
<body>
<?php
	$conexion = new mysqli("localhost", "root", "admin", "eje5_2_DB") or 
	die("<div class='alert aler-danger text-center'><p>No es posible conectarse a la 
	base de datos. Compruebe que los datos de conexión, usuario y/o contraseña son correctos.</p></div>");
?>
	<div class="container text-center">
	<div class="row">
		<div class="col-md-4">
			<h4>Consulta 1</h4>
			<?php
			$consulta1 = "SELECT r.numserie, r.descripcion
						  FROM recursos as r
						  WHERE NOT EXISTS (SELECT t.numserie
					                        FROM tiempo_uso as t
					                        WHERE r.numserie = t.numserie)";
			if($resultado = $conexion->query($consulta1)) {
				echo "<table class='table table-condensed table-bordered'>";
				echo "<tr><th>Número de serie</th><th>Descripción</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "<p class='text-danger'>Consulta no resuelta. Error $conexion->errno : $conexion->error </p><br>";
			}
			?>
		</div>
		<div class="col-md-4">
			<h4>Consulta 2</h4>
			<?php
			$consulta2 = "SELECT p.dni, p.nombre_y_apellidos
						  FROM profesionales as p
						  WHERE p.dni IN (SELECT t.dni
					                        FROM tiempo_uso as t
					                        WHERE p.dni = t.dni)
					      ORDER BY(p.nombre_y_apellidos)";
			if($resultado = $conexion->query($consulta2)) {
				echo "<table class='table table-condensed table-bordered'>";
				echo "<tr><th>DNI</th><th>Nombre Apellidos</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "<p class='text-danger'>Consulta no resuelta. Error $conexion->errno : $conexion->error </p><br>";
			}
			?>
		</div>
		<div class="col-md-4">
			<h4>Consulta 3</h4>
			<?php
			$consulta3 = "SELECT codigo, descripcion 
		                  FROM empresas 
		                  WHERE Codigo IN (SELECT empresa 
		                                   FROM profesionales p 
		                                   LEFT JOIN tiempo_uso t ON p.DNI = t.DNI
		                                   GROUP BY empresa
		                                   HAVING COUNT(t.DNI)>=4)";
			if($resultado = $conexion->query($consulta3)) {
				echo "<table class='table table-condensed table-bordered'>";
				echo "<tr><th>Código</th><th>Descripción</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "<p class='text-danger'>Consulta no resuelta. Error $conexion->errno : $conexion->error </p><br>";
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h4>Consulta 4</h4>
			<?php
			$consulta4 = "SELECT p.DNI, p.Nombre_y_apellidos, e.descripcion, r.NumSerie, 
		                         r.descripcion, t.fecha_inicio, t.fecha_fin
		                  FROM tiempo_uso as t,profesionales as p,recursos as r,empresas as e 
		                  WHERE t.DNI = p.DNI AND t.NumSerie = r.NumSerie
		                        AND p.empresa = e.Codigo AND r.empresa = e.Codigo";
			if($resultado = $conexion->query($consulta4)) {
				echo "<table class='table table-condensed table-bordered table-hover'>";
				echo "<tr><th>DNI</th><th>Nombre Apellidos</th><th>Empresa</th><th>Nº serie</th>
		              <th>Recurso</th><th>Fecha inicio</th><th>Fecha fin</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td>
						  <td>" . utf8_encode($row[2]) . "</td><td>" . utf8_encode($row[3]) . "</td>
			              <td>" . utf8_encode($row[4]) . "</td><td>" . utf8_encode($row[5]) . "</td>
			              <td>" . utf8_encode($row[6]) . "</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "<p class='text-danger'>Consulta no resuelta. Error $conexion->errno : $conexion->error </p><br>";
			}
			?>
		</div>
	</div>
	</div>
</body>
</html>