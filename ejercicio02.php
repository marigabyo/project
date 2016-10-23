<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 2</title>
	</head>
	<body>
		<p>Probando con PHP</p>
		<hr>
	</body>
</html>

<?php
	$meses = array("Nombre" => "Marigaby", "Edad" => "25", "Mes" => "Julio, 09", "Año" => "1991");

	foreach ($meses as $key => $value) {
		echo "Info: $key => $value" . "<br>";
		echo "mierda";	
	}

?>