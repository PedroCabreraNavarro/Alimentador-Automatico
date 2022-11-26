<?php 
$hora = $_POST['hora'];
$cantidad = $_POST['cantidad'];
$velocidad = $_POST['velocidad'];
$nuevaURL='index';
$sql = "UPDATE alimentador SET hora_alimentacion = '$hora' WHERE identificador = 1;";
$sql2 ="UPDATE alimentador SET cantidad = '$cantidad' WHERE identificador = 1;";
$sql3 ="UPDATE alimentador SET velocidad = '$velocidad' WHERE identificador = 1;";
$link = new mysqli("localhost", "id19883843_pedrillo", "K8KHxONsrnz0A#2%", "id19883843_datos_alimentador");
mysqli_query($link,$sql);
mysqli_query($link,$sql2);
mysqli_query($link,$sql3);
header("Location:$nuevaURL.php");

?>