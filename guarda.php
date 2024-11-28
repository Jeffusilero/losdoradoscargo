<?php

require './config.php';

$guia = $coon->real_escape_string($_POST['guia']);
$nombre = $coon->real_escape_string($_POST['nombre']);
$telefono = $coon->real_escape_string($_POST['telefono']);
$ubicacion = $coon->real_escape_string($_POST['ubicacion']);

$sql = "INSERT INTO clientes (guia, nombre, telefono, ubicacion)
VALUES ('$guia', '$nombre', $telefono, $ubicacion)";
if($conn->query($sql)){
    $id = $conn->insert_id;
}

header('Location: registrar.php');