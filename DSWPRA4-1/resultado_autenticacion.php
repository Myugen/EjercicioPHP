<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
	if(!empty($_POST["password"]) && !empty($_POST["user"])) {
		$password = $_POST["password"];
		if(preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/", $password)) {
			echo "<p><font color='green'>Password válido</font></p><br>";
			echo "El usuario y password introducido es correcto.<br>";
			echo "<a href='theme.php'>Elige un tema css para personalizar tu web durante los próximos 30días</a><br>";
			echo "<p>PHPSESSID ". $_COOKIE["PHPSESSID"] . "</<p><br>";
		}
		else {
			echo "<p><font color='red'>Password no válido</font></p><br>";
			echo "<p>Lo siento, no tiene privilegios para acceder a la web, por favor vuelva a la página anterior e introduzca una contraseña válida.</p><br>";
			echo "<a href='autenticacion.php'>Volver a la página anterior</a><br>";
		}
	}
	else {
		echo "<p><font color='red>No puede haber algún campo vacío.</font></p><br>";
		echo "<a href='autenticacion.php'>Volver a la página anterior</a><br>";
	}
?>
</body>
</html>