<?php

include '../Conexion/conexion.php';

$productos = json_decode($_POST['productos'], true);

foreach ($productos as $producto) {
    $producto_id = $producto['id'];
    $nombre = $producto['nombre'];
    $precio = $producto['precio'];
    $cantidad = isset($producto['cantidad']) ? $producto['cantidad'] : 1;
    $total = $precio * $cantidad;

    $stmt = $conn->prepare("INSERT INTO compras (producto_id, nombre, precio, cantidad, total) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiii", $producto_id, $nombre, $precio, $cantidad, $total);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();

header("Location: ./CompradorPagar.php");
exit();
?>
