<html>
<head>
	<title>Ejercicio 8</title>
</head>
<body>
<h1>Array </h1>
<?php
$v = array(1 =>90,30 =>7,'e'=>99,'hola' =>'mundo');
$v2[1]=90;
$v2[30]=30;
$v2['e']=99;
$v2['hola']='mundo';

echo "<br>";
var_dump($v);
echo "<br>";
var_dump($v2);
echo "<br>";
echo "<br>";
foreach ($v as $key => $value) 
{
	echo "<br>$key || $value";		
}
echo "<br>";
echo "<br>";
foreach ($v as $value) {
	echo "<br>$value";
}
echo "<br>";
echo "<br>";
foreach ($v as $key => $value) {
	echo "<br>$key";
}
?>
</body>
</html>