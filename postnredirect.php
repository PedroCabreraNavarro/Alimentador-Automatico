<?php
$link = new mysqli("localhost", "id19883843_pedrillo", "K8KHxONsrnz0A#2%", "id19883843_datos_alimentador");

/* comprobar la conexión */


$sql="UPDATE alimentador SET hora_alimentacion = '07:00' WHERE identificador = 1;";
mysqli_query($link, $sql);
header("Location:elformulo.html");

?>