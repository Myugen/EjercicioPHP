<!doctype html>
<html lang="es">
<head>
	<!-- JQuery 1.11.3 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Bootstrap Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Bootstrap Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- Bootstrap Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<meta charset="UTF-8" />
	<title>Ejercicio 2</title>
</head>
<body>
	<div class="container">
	<form action="ejercicio2.php" method="post">
		<div class="form-group">
			<label for="inputNombreTabla">Nombre tabla</label>
			<input type="text" name="nameTable" id="inputNombreTabla" class="form-control" placeholder="Nombre"/>
		</div>
		<div class="form-group">
			<label for="textareaEstructuraTabla">Estructura tabla</label>
			<textarea name="structTable" id="textareaEstructuraTabla" class="form-control" rows="10" placeholder="Estructura"></textarea>
		</div>
		<div class="row">
		<div class="col-sm-12 text-center">
			<p class="text-warning">No incluir los paréntesis de inicio y cierre.</p>
		</div>
		</div>
		<div class="row">
		<div class="col-xs-4 col-sm-4 text-right">
			<a href="ejercicio2.php" id="buttonBorrarFormulario" class="btn btn-danger" role="button">Borrar formulario</a>
		</div>
		
		<div class="col-xs-4 col-sm-4 text-center">
			<button type="submit" id="buttonCrearBD" class="btn btn-primary">Crear tabla</button>
		</div>
		<div class="col-xs-4 col-sm-4 text-left">
			<a href="ejercicio2.php" id="buttonLinkRestaurarFormulario" class="btn btn-warning" role="button">Restaurar formulario</a>
		</div>
		</div>
	</form>
	<div id="informacion" class="jumbotron text-center">
	<?php
		require 'conecta.php';
		if((!empty($_POST["nameTable"])) && (!empty($_POST["structTable"]))) {
			$nameTable = $_POST["nameTable"];
			$structTable = $_POST["structTable"];
			$query = "CREATE TABLE $nameTable ($structTable)";
			if($conexion->query($query)) {
				echo "<p class='text-success'>Tabla <strong>$nameTable</strong> creada correctamente.</p><br>";
			}
			else {
				echo "<p class='text-danger'>No es posible crear la tabla <strong>$nameTable</strong>. Error $conexion->errno : $conexion->error </p><br>";
			}
		}
		else {
			echo "<p class='text-warning'>No deje ningún campo vacío.</p><br>";
		}
		$conexion->close();
	?>
	</div>
	</div>
</body>
</html>