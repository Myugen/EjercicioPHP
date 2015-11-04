<?php
	$conectionDB = "localhost";
	$userDB = "root";
	$passDB = "admin";
	$nameDB = "MI_AGENDA";
	$conexion = new mysqli($conectionDB, $userDB, $passDB);
	if(!$conexion) {
		die("<p class='text-danger'>Error de conexión " . mysqli_connect_errno() . ": ". mysqli_connect_error() . "</p><br>");
	}
	else {
		echo "<p class='text-success'>Éxito en la conexión a la Base de Datos. $conexion->host_info</p><br>";
		$conexion->query("create database if not exists " . $nameDB . " character set utf8 collate utf8_spanish_ci") or die("<p class='text-danger'>No ha sido posible crear la base de datos.</p><br>" );
		$conexion->select_db($nameDB);
		$conexion->query("SET NAMES 'utf8'");
		echo "<p class='text-success'>Base de datos <strong>$nameDB</strong> seleccionado con éxito.</p><br>";
	}
?>