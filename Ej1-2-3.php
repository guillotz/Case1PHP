<html>
<head>
	<title>Ejercicios 1/2/3</title>
</head>
<body>
	<h1>Ejercicio 1</h1>
	<?php
$cont = 1;
$i = 1;
$suma = 0;
echo "Numeros sumados: ";
while ($suma <= 1000)
{
	$suma+=$i;
	$cont++;
	$i++;
	echo "$i,";
}
echo "Cantidad de numeros sumados: $cont";
?>
<h1> Ejercicio 2</h1>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("Y-M-D") . "<br>";
echo "Today is " . date("l");
if (date("m")>=12&& date("m") < 3)
{
	echo "<br>Verano";
}
else if (date("m")>=3 && date("m")<6)
{
	echo "<br>Otoño";
}
else if (date("m")>=6 && date("m")<9) 
{
		echo "<br>Invierno";
}
else
{
	echo "<br>Primavera";
}
?>
<h1> Ejercicio 3</h1>
<?php
$a = 6;
$b = 9;
$c = 8;
$d = 5;
$e = 1;
$f = 5;
if ($a < $b && $a > $c || $a > $b && $a < $c)
{
	echo "<br>$a";
}
else if ($b > $a && $b < $c || $b < $a && $b > $c)
{
	echo "<br>$b";
}
else if ($c < $a && $c > $b || $c > $a && $c < $b)
{
	echo "<br>$c";
}
else
{
	echo "<br>No hay valor del medio";
}
if ($d < $e && $d > $f || $d > $e && $d < $f)
{
	echo "<br>$d";
}
else if ($e < $f && $e > $d || $e > $f && $e < $d)
{
	echo "<br>$e";
}
else if ($f < $d && $f > $e || $f > $d && $f < $e)
{
	echo "<br>$f";
}
else
{
	echo "<br>No hay valor del medio";
}
?>
</body>
</html>