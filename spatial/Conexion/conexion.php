<?php
$host = "localhost"; 
$usuario = "root";
$contrasena = ""; 
$base_datos = "inventario_tenis";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
}
?>
