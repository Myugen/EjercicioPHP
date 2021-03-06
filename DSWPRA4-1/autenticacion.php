<?php
session_start();
//Si se aprieta el enlace 'Eliminar' creo una variable GET para dejar una marca de borrado, si esa marca existe, borro la cookie.
if(isset($_GET["borrar"])) {
	unset($_COOKIE["contador"]);
	setcookie("contador", null, time() - 3600);
}
/*Si a la llamada de la página existe la cookie que contabiliza las visitas a la web, entonces aumento el contador y la almaceno
en la cookie otra vez. Si no existe tal cookie, la creo con el contador iniciado a 1 (la primera visita)*/ 
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Panel de autenticación</title>
</head>
<body>
	<div class="container">
	<form action="resultado_autenticacion.php" method="post" role="form">
	<fieldset>
	<legend><h2>Panel de autenticación</h2></legend>
	<label for="textBoxUsuario">Usuario:</label> 
	<input type="text" name="user" id="textBoxUsuario" class="form-control"/><br>
	<label for="textBoxPassword">Password:</label> 
	<input type="password" name="password" id="textBoxPassword" class="form-control"/><br>
	<button type="submit" class="btn btn-default">Iniciar sesión</button>
	</fieldset>
	</form>
	<div class="alert alert-warning" role="alert">
	<p>Para ingresar, insertar <strong>un usuario cualquiera</strong> y <strong>un password que cumpla</strong>:<br>
	La clave tiene al menos 8 carácteres y al menos una cifra del 0-9 y una letra.</p>
	</div>
	<div id="informacion" class="jumbotron text-center">
	<h2>Contador de accesos</h2>
	<?php
		//Control para escribir un mensaje un poco más personalizado en caso de ser la primera vez que se accede a la página
		if($contador == 1)
			echo "<p>Ha accedido a la página por primera vez.</p>";
		else 
			echo "<p>Ha accedido a la página<strong> $contador </strong>veces.</p>";
	?>
	<br>
	<a href="autenticacion.php">Actualizar</a>&nbsp | &nbsp <a href="autenticacion.php?borrar=1">Eliminar</a>
	</div>
	</div>
</body>
</html>