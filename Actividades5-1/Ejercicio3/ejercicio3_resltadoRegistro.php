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
	<title>Ejercicio 3 - Resultado registro</title>
</head>
<body>
	<div class="container">
	<div id="informacion" class="jumbotron text-center">
	<?php
	if((!empty($_POST["user"])) && (!empty($_POST["pass"]))) {
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{7,15}$/", $pass)) {
			$nameDB = $_SESSION["nameDB"];
			$userDB = $_SESSION["userDB"];
			$passDB = $_SESSION["passDB"];
			$conectionDB = $_SESSION["conectionDB"];
			$conexion = new mysqli($conectionDB, $userDB, $passDB, $nameDB);
			if($conexion) {
				echo "<p class='text-success'>Conexión con la base de datos realizada satisfactoriamente.</p><br>";
				$query = "INSERT INTO passwords2015(usuario, password) VALUES('$user', '$pass')";
				if($conexion->query($query)) {
					echo "<p class='text-success'>Registro añadido satisfactoriamente.</p><br>";
					echo "<a href='ejercicio3_registro.php'>¿Añadir otro registro?</a><br>";
				}
				else {
					echo "<p class='text-danger'>No es posible añadir el registro. Error $conexion->errno : $conexion->error </p><br>";
					echo "<a href='ejercicio3_registro.php'>Volver a la página anterior</a><br>";
				}
				$conexion->close();
			}
			else {
				echo "<p class='text-danger'>No es posible conectarse a la base de datos. Compruebe que los datos de conexión, usuario y/o contraseña son correctos.</p><br>";
				echo "<a href='ejercicio3_registro.php'>Volver a la página anterior</a><br>";
			}
		}
		else {
			echo "<p class='text-danger'>Password inválido, asegúrese que corresponde con lo pedido anteriormente.</p><br>";
			echo "<a href='ejercicio3_registro.php'>Volver a la página anterior</a><br>";
		}
	}
	else {
		echo "<p class='text-warning'>No deje ningún campo vacío.</p><br>";
		echo "<a href='ejercicio3_registro.php'>Volver a la página anterior</a><br>";
	}
	?>
	</div>
	</div>
</body>
</html>