<?php
echo '<button onclick="history.back()">Volver atrás</button><br><br>';

//$saludo = "Hola ";

//if (isset($_GET['nombre']))
//{
//	$nombre = $_GET['nombre'];
//	echo $saludo.$nombre;
//}
//else
//{
//	echo $saludo.'Pedro';
//}



$nombre = $_GET['nombre'] ?? 'Pedro';
echo $saludo.$nombre;
echo '<br>';
