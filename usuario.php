<?php
$usuario = $_POST['usuario'];
$password = $_POST['contraseña'];
$nuevaURL='principal';

$link = new mysqli("localhost", "id19883843_pedrillo", "K8KHxONsrnz0A#2%", "id19883843_datos_alimentador");
foreach ($link->query('SELECT * from USUARIOS') as $row){
    if($usuario ==$row['nombre']){
        if($password==$row['clave']){
            header('Location:principal.php');
        }else{
            echo "contraseña erronea";
        }
    }else{
        echo "no es el usuario";
    }
}
?>