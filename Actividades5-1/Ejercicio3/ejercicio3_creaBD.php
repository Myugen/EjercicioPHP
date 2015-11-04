<?php
?>
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
	<title>Ejercicio 3 - Crear Base de datos</title>
</head>
<body>
	<form action="ejercicio3_reultadoBD.php" class="form-horizontal" method="post">
		<fieldset>
		<legend><h2 class="text-center">Crear Base de datos y tablas</h2></legend>
		<div class="form-group">
			<label for="inputNombreBD" class="col-sm-4 control-label">Nombre Base de datos</label>
			<div class="col-sm-4">
				<input type="text" name="nameDB" id="inputNombreBD" class="form-control" placeholder="Base de datos"/>
			</div>
		</div>
		<div class="form-group">
			<label for="inputNombreUsuario" class="col-sm-4 control-label">Nombre Usuario</label>
			<div class="col-sm-4">
				<input type="text" name="userDB" id="inputNombreUsuario" class="form-control" placeholder="Usuario"/>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-4 control-label">Password Base de datos</label>
			<div class="col-sm-4">
				<input type="password" name="passDB" id="inputPassword" class="form-control" placeholder="Password"/>
			</div>
		</div>
		<div class="form-group">
			<label for="inputConexion" class="col-sm-4 control-label">Conexión Base de datos</label>
			<div class="col-sm-4">
				<input type="text" name="conectionDB" id="inputConexion" class="form-control" placeholder="Conexión"/>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-12 text-center">
			<p class="text-warning">Elige nombres cortos (no escoger caracteres como '.' y '\' o '/').</p>
		</div>
		</div>
		<div class="row">
		<div class="col-xs-4 col-sm-4 text-right">
			<a href="ejercicio3_creaBD.php" id="buttonBorrarFormulario" class="btn btn-danger" role="button">Borrar formulario</a>
		</div>
		
		<div class="col-xs-4 col-sm-4 text-center">
			<button type="submit" id="buttonCrearBD" class="btn btn-primary">Crear base de datos</button>
		</div>
		<div class="col-xs-4 col-sm-4 text-left">
			<a href="ejercicio3_creaBD.php" id="buttonLinkRestaurarFormulario" class="btn btn-warning" role="button">Restaurar formulario</a>
		</div>
		</div>
		</fieldset>
	</form>
</body>
</html>

