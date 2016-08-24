<html>
<head>
	<title>Ejercicio 10</title>
</head>
<body>
<h1>Array Lapiceras</h1>
<?php
$arrayLapicera = array(	array('color'=>'verde', 'marca' => 'silvapen', 'trazo'=> 'fino' , 'precio' => 5),
						array('color'=>'azul', 'marca' => 'bic', 'trazo'=> 'grueso' , 'precio' => 10),
						array('color'=>'negro', 'marca' => 'parker', 'trazo'=> 'mixto' , 'precio' => 2));

$lap1 = array('color'=>'verde', 'marca' => 'silvapen', 'trazo'=> 'fino' , 'precio' => 5);
$lap2 = array('color'=>'azul', 'marca' => 'bic', 'trazo'=> 'grueso' , 'precio' => 10);
$lap3 = array('color'=>'negro', 'marca' => 'parker', 'trazo'=> 'mixto' , 'precio' => 2);
$arrayLapiceraA = array('001' => $lap1,'002'=>$lap2,'003'=>$lap3);
$arrayContenedor = array($arrayLapicera,$arrayLapiceraA);

foreach ($arrayLapicera as $value)
 {
 	echo "<br>";
	foreach ($value as $key => $value2) 
	{
		echo "<br>$key => $value2";
	}
}
echo "<br>";
echo "<br>";

foreach ($arrayContenedor as $conte) 
{
	foreach ($conte as $key1 =>$arraylap)
	{	
		echo "<br>";
		echo "<br>$key1";
		foreach ($arraylap as $key => $value) 
		{
			echo "<br>$key => $value";
		}
	}
}
?>
</body>
</html>