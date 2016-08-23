<html>
<head>
	<title>Fink</title>
</head>
<body>
<h1>Hola Mundo</h1>
<?php
/*echo "Hola PHP";
echo "<h2>Hola PHP2</h2>";
$numero = 10;
echo "<br>El numero es: ".$numero;
echo "<br>El numero es: $numero";
echo '<br>El numero es: $numero';
echo "El cambio";
*/
//Crear un numero random y mostrarlo
$random = (rand(0,10));
echo "Numero:"."<h1> $random</h1>";
	if ($random % 2 == 0)
	{
		echo "<br>Numero par";
	}else
		{
			echo "<br>Numero impar";
		}
//Creo 10 numeros random
$par =0;
$vueltas = 100000;
$impar = 0;
$cont1 = 0;
$cont2 = 0;
$cont3 = 0 ;
$cont4 = 0;
$cont5 = 0;
$cont6 = 0;
$cont7 = 0;
$cont8 = 0;
$cont9 = 0;
$cont10 = 0;

for ($i=0; $i < $vueltas ; $i++)
{
	$random = (rand(0,10));
	if ($random % 2 == 0)
	{
		$par++;		
	}else
	{
		$impar++;
	}
	switch ($random)
	{
		case 1:
			$cont1++;
			break;
		case 2:
			$cont2++;
			break;
		case 3:
			$cont3++;
			break;
		case 4:
			$cont4++;
			break;
		case 5:
			$cont5++;
			break;
		case 6:
			$cont6++;
			break;
		case 7:
			if ($cont7+1/$vueltas*100 > 5)
			{
				continue;
			}
			$cont7++;
			break;
		case 8:
			$cont8++;
			break;
		case 9:
			$cont9++;
			break;
		case 10:
			$cont10++;
			break;
	}	
}
echo "<br><br>";
echo "<br>Numeros Pares: $par ";
echo "<br>Numeros impares: $impar";
echo "<br><br>";
echo "<br>Unos: $cont1 ".'_|%'.$cont1/$vueltas*100;
echo "<br>Dos: $cont2".'___|%'.$cont2/$vueltas*100;
echo "<br>Tres: $cont3".'__|%'.$cont3/$vueltas*100;
echo "<br>Cuatro: $cont4".'_|%'.$cont4/$vueltas*100;
echo "<br>Cincos: $cont5".'_|%'.$cont5/$vueltas*100;
echo "<br>Seis: $cont6".'__|%'.$cont6/$vueltas*100;
echo "<br>Siete: $cont7".'_|%'.$cont7/$vueltas*100;
echo "<br>Ochos: $cont8".'_|%'.$cont8/$vueltas*100;
echo "<br>Nueves: $cont9".'|%'.$cont9/$vueltas*100;
echo "<br>Diez: $cont10".'_|%'.$cont10/$vueltas*100;

?>
</body>
</html>