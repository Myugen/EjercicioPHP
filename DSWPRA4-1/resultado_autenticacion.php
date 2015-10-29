<?php
if(isset($_COOKIE["contador"])) {
	$contador = $_COOKIE["contador"];
	$contador+=1;
	setcookie("contador", $contador, time() + 60 * 60 * 24 * 30);
}
else {
	$contador = 1;
	setcookie("contador", $contador, time() + 60 * 60 * 24 * 30);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Resultado autenticación</title>
</head>
<body>
<div class="container">
	<div class="jumbotron text-center">
	<?php
		if(!empty($_POST["password"]) && !empty($_POST["user"])) {
			$password = $_POST["password"];
			if(preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/", $password)) {
				echo "<p class='text-success'>Password válido</p><br>";
				echo "El usuario y password introducido es correcto.<br>";
				echo "<a href='theme.php'>Elige un tema css para personalizar tu web durante los próximos 30días</a><br><br>";
				echo "<p class='text-warning'><strong>PHPSESSID:</strong> ". $_COOKIE["PHPSESSID"] . "</<p><br>";
				echo "<p>Ha accedido a la página <strong>$contador</strong> veces</p><br>";
			}
			else {
				echo "<p class='text-danger'>Password no válido</p><br>";
				echo "<p>Lo siento, no tiene privilegios para acceder a la web, por favor vuelva a la página anterior e introduzca una contraseña válida.</p><br>";
				echo "Ha accedido a la página <strong>$contador</strong> veces<br>";
				echo "<a href='autenticacion.php'>Volver a la página anterior</a><br>";
			}
		}
		else {
			echo "<p><font color='red'>No puede haber algún campo vacío.</font></p><br>";
			echo "Ha accedido a la página <strong>$contador</strong> veces<br>";
			echo "<a href='autenticacion.php'>Volver a la página anterior</a><br>";
		}
	?>
	</div>
</div>
</body>
</html>