<?php
session_start();
if(!isset($_POST["mensaje"]) || !isset($_SESSION["id"]) || !isset($_GET["idTema"]))
	header("Location: ../foro.php");
else {
	$idTema = $_GET["idTema"];
	$idUsuario = $_SESSION["id"];
	$mensaje = $_POST["mensaje"];
	$conectionDB = "localhost";
	$userDB = "root";
	$passDB = "admin";
	$nameDB = "foro";
	$conexion = new mysqli($conectionDB, $userDB, $passDB, $nameDB);
	if(!$conexion) {
		die("Error de conexión $conexion->connect_errno: $conexion->connect_error");
	}
	else {
		$peticion = "INSERT INTO mensaje VALUEs(null, $idUsuario, $idTema, '" . utf8_decode($mensaje) . "', CURRENT_TIMESTAMP)";
		if($conexion->query($peticion)) {
			header("Location: listado.php?idTema=" . $idTema);
			$conexion->close();
		}
		else
			die("Error en añadir comentario $conexion->errno: $conexion->error");
	}
}
?>