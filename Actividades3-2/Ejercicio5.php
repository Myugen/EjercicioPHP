<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ejercicio 5</title>
</head>
<body>
	<?php
	//Creación de un array de 10 elementos con números creados aleatoriamente
	$vector = array();
	for($i = 0; $i < 10; $i++)
		$vector[$i] = rand();
	//Mostrar array con un for
	echo "<h3>BUCLE FOR</h3>";
	for($i = 0; $i < count($vector); $i++)
		echo "El vector con índice [" . $i . "] tiene el valor " . $vector[$i] . "<br/>";
	echo "<h3>BUCLE FOREACH</h3>";
	foreach($vector as $item => $valor)
		echo "El vector con índice [" . $item . "] tiene el valor " . $valor . "<br/>";
	echo "<h3>BUCLE WHILE</h3>";
	$contador = 0;
	while($contador < 10) {
		echo "El vector con índice [" . $contador . "] tiene el valor " . $vector[$contador] . "<br/>";
		$contador++;
	}
	?>
</body>
</html>
