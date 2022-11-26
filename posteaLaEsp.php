<?php
/*$servername = "localhost";
$dbname = "id19883843_datos_alimentador";
$username = "id19883843_pedrillo";
$password = "K8KHxONsrnz0A#2%";
$api_key_value = "tPmAT5Ab3j7F9";*/
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//$nombre= test_input($_POST['name']);
//$tempe= test_input($_POST['temp']);
$sql = "UPDATE alimentador SET humedad = '$nombre' WHERE identificador = 1;";
$sql2 ="UPDATE alimentador SET temperatura = '$tempe' WHERE identificador = 1;";
$link = new mysqli("localhost", "id19883843_pedrillo", "K8KHxONsrnz0A#2%", "id19883843_datos_alimentador");
mysqli_query($link,$sql);
mysqli_query($link,$sql2);
echo $nombre;
echo $tempe;
?>