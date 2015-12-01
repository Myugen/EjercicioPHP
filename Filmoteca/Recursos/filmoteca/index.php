<?php 
session_start(); // Usaremos sesiones.

// Si todav�a no est�n establecidas las variables de sesi�n obligatorias...
if (!isset($_SESSION['usuario']) && !isset($_SESSION['tipo']))
{
	$_SESSION['usuario']="an&oacute;nimo";
	$_SESSION['tipo']="invitado"; // En principio todos son usuarios invitados.
}
?>

<html><head><title>FILMOTECA - Inicio de Sesi&oacute;n</title></head>
<body>

<form method="POST" action="datos_index.php">
  Nombre de Usuario: <input type="text" name="usuario"><br>
  Contrase&ntilde;a: <input type="password" name="clave"><br>
  <input type="submit" value="Entrar">
</form>

<?php
// En el pie de cada página informaremos del usuario y su tipo:
echo "<br>Bienvenido: <b>" . $_SESSION['usuario'] . "</b> - Tipo de usuario: <b>" . $_SESSION['tipo'] . "</b>";
?>
</body></html>