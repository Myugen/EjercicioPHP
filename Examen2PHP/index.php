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
	$conexion = new mysqli("localhost", "root", "admin", "bankia") or 
	die("<div class='alert aler-danger text-center'><p>No es posible conectarse a la 
	base de datos. Compruebe que los datos de conexión, usuario y/o contraseña son correctos.</p></div>");
?>
	<div class="container text-center">
	<div class="row">
		<div class="col-md-12">
			<h4>Consulta 1</h4>
			<?php
			$consulta1 = "SELECT s.codigo, s.tipo, COUNT(o.serv_cod) as numop
						  FROM servicios as s
						  LEFT JOIN operaciones as o
						  ON s.codigo = o.serv_cod
						  GROUP BY s.codigo
						  ORDER BY numop DESC";
			if($resultado = $conexion->query($consulta1)) {
				echo "<table class='table table-condensed table-bordered'>";
				echo "<tr><th>Código</th><th>Servicio</th><th>Operaciones</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td>
						  <td>" . utf8_encode($row[2]) . "</td></tr>";
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
		<div class="col-md-6">
			<h4>Consulta 2</h4>
			<?php
			$consulta2 = "SELECT t.codigo, t.zona, SUM(s.importe) as imptotal, COUNT(s.codigo) as cod
						  FROM operaciones as o
						  LEFT JOIN terminal as t
						  ON t.codigo = o.term_cod
						  LEFT JOIN servicios as s
						  ON s.codigo = o.serv_cod
						  GROUP BY t.codigo
						  ORDER BY cod, t.zona";
			if($resultado = $conexion->query($consulta2)) {
				echo "<table class='table table-condensed table-bordered'>";
				echo "<tr><th>Cajero</th><th>Zona</th>
					  <th>Importe total</th><th>Servicios totales</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td>
			              <td>" . utf8_encode($row[2]) . "</td><td>" . utf8_encode($row[3]) . "</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "<p class='text-danger'>Consulta no resuelta. Error $conexion->errno : $conexion->error </p><br>";
			}
			?>
		</div>
		<div class="col-md-6">
			<h4>Consulta 3</h4>
			<?php
			$consulta3 = "SELECT su.codigo, su.Direccion, SUM(se.importe) as imptotal
						  FROM operaciones as o
						  LEFT JOIN sucursal as su
						  ON su.codigo = o.suc_cod
						  LEFT JOIN servicios as se
						  ON se.codigo = o.serv_cod
						  GROUP BY su.codigo
						  ORDER BY imptotal DESC";
			if($resultado = $conexion->query($consulta3)) {
				echo "<table class='table table-condensed table-bordered'>";
				echo "<tr><th>Código</th><th>Dirección</th><th>Beneficios</th></tr>";
				while($row = $resultado->fetch_row()){
					echo "<tr><td>" . utf8_encode($row[0]) . "</td><td>" . utf8_encode($row[1]) . "</td>
						  <td>" . utf8_encode($row[2]) . "</td></tr>";
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