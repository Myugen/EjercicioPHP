<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 2</title>
</head>
<body>
	<form action="resultado_ejercicio2.php" method="post">
	<label for="selectMascota">¿Qué mascota desea el/la Sr./Sra.?</label><br>
	<select name="mascotas[]" id="selectMascota" multiple>
		<option>Jaguar sin adiestrar</option>
		<option>Pastor suizo</option>
		<option>Ardilla salvaje</option>
		<option>Mantis cabreada</option>
		<option>Lechuza</option>
		<option>Osito de peluche</option>
	</select><br>
	<label for="textNombre">Nombre:</label><input type="text" id="textNombre" name="datos[]"/><br>
	<label for="textApellidos">Apellidos:</label><input type="text" id="textApellidos" name="datos[]"/><br>
	<label for="textEmail">Email:</label><input type="text" id="textEmail" name="datos[]"/><br>
	<input type="submit" value="Recoger datos" />
	</form>
</body>
</html>
