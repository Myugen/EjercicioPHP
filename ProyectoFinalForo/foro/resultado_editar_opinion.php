<?php
session_start();
if(!isset($_POST["mensaje"]) || !isset($_SESSION["id"]) || !isset($_GET["idTema"]) || !isset($_GET["idOpinion"]))
	header("Location: ../foro.php");
else {
	$idTema = $_GET["idTema"];
	$idOpinion = $_GET["idOpinion"];
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
		$peticion = "UPDATE mensaje SET opinion='" . utf8_decode($mensaje) . "', fechahora=CURRENT_TIMESTAMP WHERE ID = $idOpinion AND usuarioID = $idUsuario AND temaID = $idTema";
		if($conexion->query($peticion)) {
			header("Location: listado.php?idTema=" . $idTema);
			$conexion->close();
		}
		else
			die("Error en añadir comentario $conexion->errno: $conexion->error");
	}
}
?>