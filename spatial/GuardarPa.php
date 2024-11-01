<?php
include './Conexion/conexion.php';

header('Content-Type: application/json');

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$productos = json_decode($_POST['productos'], true);

$total_pago = 0;
foreach ($productos as $producto) {
    $total_pago += $producto['precio'] * (isset($producto['cantidad']) ? $producto['cantidad'] : 1);
}

$stmt = $conexion->prepare("INSERT INTO pagos (nombre, direccion, total) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $nombre, $direccion, $total_pago);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Pago registrado exitosamente."]);
} else {
    echo json_encode(["success" => false, "message" => "Error al registrar el pago: " . $conexion->error]);
}

$stmt->close();
$conexion->close();
exit();
?>
