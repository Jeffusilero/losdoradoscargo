<?php 
//validamos datos del servidor


$conn = new mysqli("127.0.0.1", "root", "password", "oficina");

//conectamos a la base de datos




//verificamos la conexion a base de datos
if($conn->connect_error){
    die("Error al conectar la base de datos" .$conn->connect_error);
}


