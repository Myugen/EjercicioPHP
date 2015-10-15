<html>
<head>
	<meta charset="utf-8">
	<title>Ejecución de sentencias de comando</title>
</head>
<body>
	<h1>Ejecución de sentencias de comando</h1>
<?php
	$output = `ls -alr`;
	echo "<pre>" . $output . "</pre>";
?>
</body>
</html>
