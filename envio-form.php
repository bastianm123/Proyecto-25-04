<?php

$datos = array{
    "usuario" => $_POST['usuario'],
    "nombre" => $_POST['nombre'],
    "password" => $_POST['password'],
    "introducir_mensaje" => $_POST['introducir_mensaje'],
    "correo" => $_POST['correo'],
    "telefono" => $_POST['telefono'],
};

$archivo=fopen($_POST['usuario']".dat","a");

fwrite($archivo, json_encode($datos));

fclose($archivo);

?>
