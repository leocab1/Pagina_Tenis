<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario_tenis";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$product = $_POST['product'];
$quantity = $_POST['quantity'];
$supplier = $_POST['supplier'];

$sql = "INSERT INTO ordenes_compra (producto, cantidad, proveedor) VALUES ('$product', '$quantity', '$supplier')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva orden agregada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
