<html>
<head>
	<title>Fink</title>
</head>
<body>
<h1>Clases</h1>
<?php

include "EjercicioClases.php";
//include_once "EjercicioClases.php";
//require "EjercicioClases.php";
//require_once "EjercicioClases.php";

$unObjeto = new FiguraGeometrica();
$unObjeto->SetColor("Verde");
echo $unObjeto->GetColor();
echo $unObjeto->ToString();
?>
</body>
</html>