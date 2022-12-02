<?php
echo '<button onclick="history.back()">Volver atrás</button><br><br>';


$nombre = 'Pedro';
$saludo = 'Hola ' . $nombre;
$saludo2 = "Hola $nombre";
$saludo3 = 'Hola $nombre'; //No se sustituye la variable

echo "$saludo <br>";
echo "$saludo2 <br>";
echo "$saludo3 <br><br><br><br>";

echo "Sacamos todas las variables del servidor:<br>";
var_dump($_SERVER);
