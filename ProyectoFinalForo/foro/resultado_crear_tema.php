<?php
session_start();
if(!isset($_POST["titulo"]) || !isset($_SESSION["id"]))
	header("Location: ../foro.php");
else {
	$idUsuario = $_SESSION["id"];
	$titulo = $_POST["titulo"];
	$conectionDB = "localhost";
	$userDB = "root";
	$passDB = "admin";
	$nameDB = "foro";
	$conexion = new mysqli($conectionDB, $userDB, $passDB, $nameDB);
	if(!$conexion) {
		die("Error de conexión $conexion->connect_errno: $conexion->connect_error");
	}
	else {
		$peticion = "INSERT INTO tema VALUEs(null, $idUsuario, '" . utf8_decode($titulo) . "', CURRENT_TIMESTAMP)";
		if($conexion->query($peticion)) {
			header("Location: ../foro.php");
			$conexion->close();
		}
		else
			die("Error en añadir tema $conexion->errno: $conexion->error");
	}
}
?>
