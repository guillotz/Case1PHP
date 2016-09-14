<?php




$PATH = "misArchivos/Palabras.txt";
$archivo = fopen($PATH, "r")or die ("No se puede abrir archivo");
$texto = fread($archivo,filesize($PATH));
$arrayArchivo = explode(" ",$texto);
echo $texto."<br>";
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
echo "<br>Cantidad de 3: ".$l3;
echo "<br>Cantidad de 4: ".$l4;
echo "<br>Cantidad de 4+: ".$l5;


?>
<html>
<head>
	<title>Ejercicios</title>
</head>
<body>
<h1><?php echo "Ejercicio02";?><h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Elija el archivo a subir:
    <input type="file" name="archivoParaSubir" id="archivoParaSubir">
    <input type="submit" value="Subir Archivo" name="submit">
</form>
<?php
$PATH2 = "misArchivos/";
$directorio = $PATH2;
$nombreArchivo = date ("Y-m-d");
$target_file = $directorio . basename($_FILES["archivoParaSubir"][$nombreArchivo]);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

?>


</body>
</html>


