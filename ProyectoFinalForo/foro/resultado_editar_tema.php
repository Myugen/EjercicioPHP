<?php
session_start();
if(!isset($_POST["titulo"]) || !isset($_SESSION["id"]) || !isset($_GET["idTema"]))
	header("Location: ../foro.php");
else {
	$idTema = $_GET["idTema"];
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
		$peticion = "UPDATE tema SET titulo='" . utf8_decode($titulo) . "', fechahora=CURRENT_TIMESTAMP WHERE ID=$idTema AND usuarioID = $idUsuario";
		if($conexion->query($peticion)) {
			header("Location: ../foro.php");
			$conexion->close();
		}
		else
			die("Error en añadir tema $conexion->errno: $conexion->error");
	}
}
?>
