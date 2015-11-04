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
	<title>Ejercicio 3 - Añadir registros</title>
</head>
<body>
	<div class="container">
		<form action="ejercicio3_resltadoRegistro.php" class="form-horizontal" method="post">
		<fieldset>
		<legend><h2 class="text-center">Registro de datos</h2></legend>
		<div class="form-group">
			<label for="inputUsuario" class="col-sm-4 control-label">Nombre usuario</label>
			<div class="col-sm-4">
				<input type="text" name="user" id="inputUsuario" class="form-control" placeholder="Usuario"/>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-4 control-label">Password usuario</label>
			<div class="col-sm-4">
				<input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password"/>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-12 text-center">
			<p class="text-warning">El password debe de contener entre <strong>7</strong> y <strong>15 caracteres</strong>. <br>
			Además, también debe de contener al menos <strong>una minúscula</strong>, <strong>una mayúscula</strong> y <strong>un dígito</strong>.</p>
		</div>
		</div>
		<div class="row">
		<div class="col-xs-6 col-sm-6 text-right">
			<a href="ejercicio3_registro.php" id="buttonBorrarFormulario" class="btn btn-danger" role="button">Borrar formulario</a>
		</div>
		
		<div class="col-xs-6 col-sm-6 text-left">
			<button type="submit" id="buttonCrearBD" class="btn btn-primary">Crear registro</button>
		</div>
		</div>
		</fieldset>
	</form>
	</div>
</body>
</html>