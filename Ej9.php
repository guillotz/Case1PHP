<html>
<head>
	<title>Ejercicio 9</title>
</head>
<body>
<h1>Array Lapiceras</h1>
<?php
$arrayLapicera = array(	array('color'=>'verde', 'marca' => 'silvapen', 'trazo'=> 'fino' , 'precio' => 5),
						array('color'=>'azul', 'marca' => 'bic', 'trazo'=> 'grueso' , 'precio' => 10),
						array('color'=>'negro', 'marca' => 'parker', 'trazo'=> 'mixto' , 'precio' => 2));

foreach ($arrayLapicera as $value)
 {
	foreach ($value as $key => $value2) 
	{
		echo "<br>$key => $value2";
	}
}
?>
</body>
</html>