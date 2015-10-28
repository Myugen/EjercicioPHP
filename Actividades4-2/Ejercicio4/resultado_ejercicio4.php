<?php
session_start(); //Lo pongo aquí porque produce un Warning en la página, visité foros y es por esta razón (una configuración del php.ini)
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Resultado - Ejercicio 4</title>
</head>
<body>
	<?php
	function validarTamanioPass($pass) {
		if(strlen($pass) >= 6 && strlen($pass) <= 16)
			return true;
		return false;
	}
	
	$_SESSION["userAdmin"] = "Miguel";
	$_SESSION["passAdmin"] = "123456";
	if(!isset($_SESSION["contador"]))
		$_SESSION["contador"] = 0;
	if(!isset($_SESSION["usuarioAnterior"]))
		$_SESSION["usuarioAnterior"] = "";
	
	if(!empty($_POST["user"]) && !empty($_POST["password"])) {
		$user = $_POST["user"];
		$pass = $_POST["password"];
		
		if(validarTamanioPass($pass)) {
			if(($user == $_SESSION["userAdmin"]) && ($pass == $_SESSION["passAdmin"])) {
				echo "<table border='1'>";
				echo "<tr><th colspan='2'>INFORMACIÓN DE SESIÓN</th></tr>";
				echo "<tr> <td bgcolor='grey'>ID</td> <td>" . session_id() . "</td> </tr>";
				echo "<tr> <td bgcolor='grey'>Número de accesos</td> <td>". $_SESSION["contador"] . "</td> </tr>";
				echo "<tr> <td bgcolor='grey'>Nombre actual</td> <td>$user</td> </tr>";
				echo "<tr> <td bgcolor='grey'>Nombre anterior</td> <td>" . $_SESSION["usuarioAnterior"] . "</td> </tr>";
				echo "</table><br>";
				echo "<input type='button' value='Volver' onclick=\"document.location='ejercicio4.php'\">";
			}
			else {
				$_SESSION["usuarioAnterior"] = $user;
				$_SESSION["contador"]++;
				echo "<h2>Inicio de sesión inválido. Usuario/Password incorrecto.</h2><br>";
				echo "<h2>Pulse el botón para volver al formulario de ingreso</h2><br>";
				echo "<input type='button' value='Volver' onclick=\"document.location='ejercicio4.php'\">";
			}
		}
		else {
			$_SESSION["usuarioAnterior"] = $user;
			$_SESSION["contador"]++;
			echo "<h2>La contraseña debe de ser entre 6 y 16 caracteres</h2><br>";
			echo "<h2>Pulse el botón para volver al formulario de ingreso</h2><br>";
			echo "<input type='button' value='Volver' onclick=\"document.location='ejercicio4.php'\">";
		}
	}
	else {
		$_SESSION["contador"]++;
		echo "<h2>Falta ingresar algún dato</h2><br>";
		echo "<h2>Pulse el botón para volver al formulario de ingreso</h2><br>";
		echo "<input type='button' value='Volver' onclick=\"document.location='ejercicio4.php'\">";
	}
	?>
</body>
</html>