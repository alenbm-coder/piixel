<?php

//Establish connection to the database
$conexion = new MySQLi("localhost", "root", "", "piixeldb");

//Check for connection errors
if (!$conexion) {
    echo mysqli_error($conexion);
    exit();
}

//Retrieve form data
$nombre = $_POST['reg_nom'];
$apellido = $_POST['reg_apll'];
$email = $_POST['reg_corr'];
$telefono = $_POST['reg_tel'];
$direccion = $_POST['reg_dir'];
$ciudad = $_POST['reg_cuid'];
$tipo_documento = $_POST['reg_tdoc'];
$documento = $_POST['reg_doc'];
$contrasena = $_POST['reg_pass'];

//Create SQL INSERT statement to insert data into Clientes table
$sql = "INSERT INTO Clientes (Nombre, Apellido, Email, Telefono, Direccion, Ciudad, Identificacion, Contraseña) VALUES ('$nombre', '$apellido', '$email', $telefono, '$direccion', '$ciudad', $documento, '$contrasena')";

//Execute SQL statement
if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../Inicio_sesion/login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

//Close database connection
$conexion->close();
?>
