<?php 
//validamos datos del servidor
$servidor =  "127.0.0.1";
$usuario = "Jefflascano";
$password = "4526":
$bd = "oficina";

//conectamos a la base de datos
//$conectar = mysqli_connect($servidor, $usuario,$password,$bd);


//hacemos llamado al imput de formulario 
/*$guia = $_POST["guia"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$posicion = $_POST["posicion"];*/


//verificamos la conexion a base de datos
if($conn->connect_error){
    diet("Error al conectar la base de datos".$conn->connect_error);
}


