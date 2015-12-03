<?php
if(!isset($_GET["idOpinion"]))
	header("Location: ../foro.php");
else {
	$idOpinion = $_GET["idOpinion"];
	$conectionDB = "localhost";
	$userDB = "root";
	$passDB = "admin";
	$nameDB = "foro";
	$conexion = new mysqli($conectionDB, $userDB, $passDB, $nameDB);
	if(!$conexion) {
		die("Error de conexión $conexion->connect_errno: $conexion->connect_error");
	}
	else {
		$peticion = "DELETE FROM mensaje WHERE id = $idOpinion";
		if($conexion->query($peticion)) {
			header("Location: ../foro.php");
			$conexion->close();
		}
		else
			die("Error en eliminar registro $conexion->errno: $conexion->error");
	}
}
?>