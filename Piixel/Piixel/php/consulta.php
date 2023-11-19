<?php

header('Content-Type: application/json');

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'piixeldb');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

$mysqli->query("SET NAMES 'utf8'");

if(!$mysqli){
	die("La Conexión ha fallado: " . $mysqli->error);
}

// Se trae de la base de datos los titulos de los equipos de colombia
$query = sprintf("SELECT Id_Producto, Marca, Categoria, Precio, Ficha_Tecnica_Id_Ficha,Compras_id_compras FROM productos");

$result = $mysqli->query($query);

// Se hace un foreach para recorrer los datos obtenidos
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

// Borrar los datos
$result->close();

// Cerrar la conexión a la base de datos
$mysqli->close();

// Mostramos los datos en formato JSON
print json_encode($data);
