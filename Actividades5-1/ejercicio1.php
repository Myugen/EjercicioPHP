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
	<title>Ejercicio 1</title>
</head>
<body>
	<?php
	
	?>
	<form action="ejercicio1.php" class="form-horizontal" method="post">
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
			<a href="ejercicio1.php" id="buttonBorrarFormulario" class="btn btn-danger" role="button">Borrar formulario</a>
		</div>
		
		<div class="col-xs-4 col-sm-4 text-center">
			<button type="submit" id="buttonCrearBD" class="btn btn-primary">Crear base de datos</button>
		</div>
		<div class="col-xs-4 col-sm-4 text-left">
			<a href="ejercicio1.php" id="buttonLinkRestaurarFormulario" class="btn btn-warning" role="button">Restaurar formulario</a>
		</div>
		</div>
		</fieldset>
	</form>
	<div id="informacion" class="jumbotron text-center">
	<?php
	if((!empty($_POST["nameDB"])) && (!empty($_POST["userDB"])) && (!empty($_POST["passDB"])) && (!empty($_POST["conectionDB"]))) {
		$nameDB = $_POST["nameDB"];
		$userDB = $_POST["userDB"];
		$passDB = $_POST["passDB"];
		$conectionDB = $_POST["conectionDB"];
		$conexion = mysql_connect($conectionDB, $userDB, $passDB);
		if($conexion) {
			echo "<p class='text-success'>Conexión con la base de datos realizada satisfactoriamente.</p><br>";
			if(mysql_query("CREATE DATABASE $nameDB CHARACTER SET utf8 COLLATE utf8_spanish_ci")) {
				echo "<p class='text-success'>Base de datos <strong>$nameDB</strong> creada correctamente.</p><br>";
				if(!mysql_select_db($nameDB))
					die("<p class='text-danger'>No es posible seleccionar la base de datos $nameDB: " . mysql_errno() . ".</p><br>");
				mysql_query("SET NAMES 'utf8'");
				$sql = "CREATE TABLE agenda2015(
					ID INT NOT NULL AUTO_INCREMENT,
					nombre VARCHAR(50) NOT NULL,
					dirección VARCHAR(100) NOT NULL,
					teléfono VARCHAR(15) NOT NULL,
					mail VARCHAR(50) NOT NULL,
					PRIMARY KEY(ID))";
				if(mysql_query($sql)) {
					echo "<p class='text-success'>Tabla <strong>agenda2015</strong> creada correctamente.</p><br>";
				}
				else {
					echo "<p class='text-danger'>No es posible crear la tabla <strong>agenda2015</strong>. Error " . mysql_errno() . ": " . mysql_error() . "</p><br>";
				}
			}
			else {
				echo "<p class='text-danger'>No es posible crear la base de datos <strong>$nameDB</strong>. Error " . mysql_errno() . ": " . mysql_error() . ".</p><br>";
			}
			mysql_close($conexion);
		}
		else {
			echo "<p class='text-danger'>No es posible conectarse a la base de datos. Compruebe que los datos de conexión, usuario y/o contraseña son correctos.</p><br>";
		}
	}
	else {
		echo "<p class='text-warning'>No deje ningún campo vacío.</p><br>";
	}
	?>
	</div>
</body>
</html>

