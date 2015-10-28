<?php
session_start();
if(isset($_GET["borrar"])) {
	unset($_COOKIE["contador"]);
	setcookie("contador", null, time() - 3600);
}
if(isset($_COOKIE["contador"])) {
	$contador = $_COOKIE["contador"];
	setcookie("contador", ++$contador, time() + (60*60*24*30));
}
else {
	$contador = 1;
	setcookie("contador", $contador, time() + (60*60*24*30));
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" href="style/resultado.css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Panel de autenticación</title>
</head>
<body>
	<form action="resultado_autenticacion.php" method="post">
	<fieldset>
	<legend>Panel de autenticación</legend>
	<strong>Usuario:</strong> <input type="text" name="user" id="textBoxUsuario" /><br>
	<strong>Password:</strong> <input type="password" name="password" id="textBoxPassword" /><br>
	<input type="submit" value="Iniciar sesión" />
	</fieldset>
	</form>
	<p>Para ingresar, insertar <strong>un usuario cualquiera</strong> y <strong>un password que cumpla</strong>:<br>
	La clave tiene al menos 8 carácteres y al menos una cifra del 0-9 y una letra.</p>
	<div id="informacion">
	<h2>Contador de accesos</h2>
	<?php
		if($contador == 1)
			echo "Ha accedido a la página por primera vez.";
		else 
			echo "Ha accedido a la página<strong> $contador </strong>veces.";
	?>
	<br>
	<a href="autenticacion.php">Actualizar</a>&nbsp | &nbsp <a href="autenticacion.php?borrar=1">Eliminar</a>
	</div>
</body>
</html>