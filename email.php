<?php
$titulo = "Alerta de sexo";
$correo= "pedrocabnav511@gmail.com";
$link = new mysqli("localhost", "id19883843_pedrillo", "K8KHxONsrnz0A#2%", "id19883843_datos_alimentador");
foreach ($link->query('SELECT * from alimentador') as $row){

$alm = $row['almacenamiento'];
$hum = $row['humedad'];
$temp = $row['temperatura'];
$pres = $row['presencia'];
$mensaje=" La temperatura reportada es $temp°c, la humedad es  del $hum%, el almacenamiento es del $alm% de la capacidad total y $pres hay presencia";

echo $alm;
echo $hum;
echo $temp;
echo $pres;
mail($correo,$titulo,$mensaje);
;
}

?>
