<?php 

$servidor =  "127.0.0.1";
$usuario = "root";
$password = "":
$bd = "oficina";
$conectar = mysqli_connect($servidor, $usuario,$password,$bd);
if($conecta->connect_error){
    diet("Error al conectar la base de datos".$conecta->connect_error);
}
?>