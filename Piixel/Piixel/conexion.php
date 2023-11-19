<?php
$conexion = new MySQLi("localhost","root","","piixeldb");
if(!$conexion){
    echo mysqli_error($conexion);
    
}
