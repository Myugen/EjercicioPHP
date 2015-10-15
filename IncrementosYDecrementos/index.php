<html>
<head>
	<meta charset="utf-8">
	<title>Incrementos y decrementos</title>
</head>
<body style="text-align: center">
	<h1>Incrementos y decrementos</h1>
<?php
	$a = 7;
	echo "El valor de \$a es: " . $a . "<br>";
	echo "Al preincrementar (++\$a) devuelve: " . ++$a . "<br>";
	echo "Al postincrementar (\$a++) devuelve: " . $a++ . "<br>";
	echo "El valor final de \$a es: " . $a . "<br>";
	$a = 7;
	echo "El valor de \$a es: " . $a . "<br>";
	echo "Al predecrementar (--\$a) devuelve: " . --$a . "<br>";
	echo "Al postdecrementar (\$a--) devuelve: " . $a-- . "<br>";
	echo "El valor final de \$a es: " . $a . "<br>";
?>
</body>
</html>
