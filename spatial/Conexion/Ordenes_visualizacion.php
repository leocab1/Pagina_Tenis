<?php
include 'conexion.php';

$sql = "SELECT id, producto, cantidad, proveedor FROM ordenes";
$result = $conn->query($sql);

$ordenes = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ordenes[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($ordenes);

// Cerrar la conexión
$conn->close();
?>
