<?php
include '../spatial/Conexion/conexion.php'; 

$sql = "SELECT id_ordenes, producto, cantidad, proveedor FROM ordenes_compra";
$result = $conexion->query($sql);
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table th, table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    table th {
        background-color: #4CAF50;
        color: white;
    }
    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table tr:hover {
        background-color: #ddd;
    }
</style>

<table id="ordersTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Proveedor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_ordenes"] . "</td>";
                echo "<td>" . $row["producto"] . "</td>";
                echo "<td>" . $row["cantidad"] . "</td>";
                echo "<td>" . $row["proveedor"] . "</td>";
                echo "<td>
                <form method='post' action='../'>
                    <input type='hidden' name='id' value='" . $row["id_ordenes"] . "'>
                    <button type='submit'>Eliminar</button>
                </form>
                <button>Modificar</button>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay órdenes de compra registradas.</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php $conexion->close(); ?>
