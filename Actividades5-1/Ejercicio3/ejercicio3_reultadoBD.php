<?php
session_start();
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
	<title>Ejercicio 3 - Resultado creación Base de datos</title>
</head>
<body>
	<div class="container">
	<div id="informacion" class="jumbotron text-center">
	<?php
	if((!empty($_POST["nameDB"])) && (!empty($_POST["userDB"])) && (!empty($_POST["passDB"])) && (!empty($_POST["conectionDB"]))) {
		$nameDB = $_POST["nameDB"];
		$userDB = $_POST["userDB"];
		$passDB = $_POST["passDB"];
		$conectionDB = $_POST["conectionDB"];
		$conexion = mysql_connect($conectionDB, $userDB, $passDB);
		$_SESSION["nameDB"] = $nameDB;
		$_SESSION["userDB"] = $userDB;
		$_SESSION["passDB"] = $passDB;
		$_SESSION["conectionDB"] = $conectionDB;
		if($conexion) {
			echo "<p class='text-success'>Conexión con la base de datos realizada satisfactoriamente.</p><br>";
			if(mysql_query("CREATE DATABASE $nameDB CHARACTER SET utf8 COLLATE utf8_spanish_ci")) {
				echo "<p class='text-success'>Base de datos <strong>$nameDB</strong> creada correctamente.</p><br>";
				if(!mysql_select_db($nameDB))
					die("<p class='text-danger'>No es posible seleccionar la base de datos $nameDB: " . mysql_errno() . ".</p><br>");
				mysql_query("SET NAMES 'utf8'");
				$sql = "CREATE TABLE passwords2015(
						id INT NOT NULL AUTO_INCREMENT,
						usuario VARCHAR(50) NOT NULL,
						password VARCHAR(15) NOT NULL,
						PRIMARY KEY(id))";
				if(mysql_query($sql)) {
					echo "<p class='text-success'>Tabla <strong>passwords2015</strong> creada correctamente.</p><br><br>";
					echo "<a href='ejercicio3_registro.php'>Ingresar usuario y password</a><br>";
				}
				else {
					echo "<p class='text-danger'>No es posible crear la tabla <strong>agenda2015</strong>. Error " . mysql_errno() . ": " . mysql_error() . "</p><br>";
					echo "<a href='ejercicio3_creaBD.php'>Volver a la página anterior</a><br>";
				}
			}
			else {
				echo "<p class='text-danger'>No es posible crear la base de datos <strong>$nameDB</strong>. Error " . mysql_errno() . ": " . mysql_error() . ".</p><br>";
				echo "<a href='ejercicio3_creaBD.php'>Volver a la página anterior</a><br>";
			}
			mysql_close($conexion);
		}
		else {
			echo "<p class='text-danger'>No es posible conectarse a la base de datos. Compruebe que los datos de conexión, usuario y/o contraseña son correctos.</p><br>";
			echo "<a href='ejercicio3_creaBD.php'>Volver a la página anterior</a><br>";
		}
	}
	else {
		echo "<p class='text-warning'>No deje ningún campo vacío.</p><br>";
		echo "<a href='ejercicio3_creaBD.php'>Volver a la página anterior</a><br>";
	}
	?>
	</div>
	</div>
</body>
</html>