<?php
include '../spatial/Conexion/conexion.php'; // Asegúrate de que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $sql_delete = "DELETE FROM ordenes WHERE id = ?";
        $stmt = $conexion->prepare($sql_delete);

        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conexion->error);
        }

        $stmt->bind_param("i", $id); // 'i' = integer

        if ($stmt->execute()) {
            echo "Orden eliminada exitosamente.";
        } else {
            echo "Error al eliminar la orden: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "No se proporcionó el ID.";
    }
}

$conexion->close();

header("Location: Ordenes.php");
exit();
?>
