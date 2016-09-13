<?php
$archivo = fopen("texto.txt", "r")or die ("No se puede abrir archivo");
$texto = fread($archivo,filesize("texto.txt"));
$arrayArchivo = explode(" ",$texto);
echo $texto;
fclose($archivo);


$l1 = 0;
$l2 = 0;
$l3 = 0;
$l4 = 0;
$l5 = 0;


foreach ($arrayArchivo as $value) 
{

	switch (strlen($value))
	{
		case 1:
			$l1++;
			break;
		case 2:
			$l2++;
			break;
		case 3:
			$l3++;
			break;	
		case 4:
			$l4++;
			break;
		default:
			$l5++;
			break;
	}
}
echo "<br>Cantidad de 1: ".$l1;
echo "<br>Cantidad de 2: ".$l2;
echo "<br>Cantidad de 3: $l3";
echo "<br>Cantidad de 4: $l4";
echo "<br>Cantidad de 4+: $l5";


?>