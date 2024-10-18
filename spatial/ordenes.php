<?php
include '../spatial/Conexion/conexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./css/Ordenes.css">
    <link rel="shortcut icon" href="images/uwuu.ico" type="image/x-icon">
    <title>SneakerHub - Órdenes de Compras</title>
</head>
<body>
    <header id="header">
        <h1><strong><a href="index.php">SneakerHub</a></strong></h1>
        <nav id="nav">
            <ul>
                <li><a href="CatalogoDeProductos.php">Catálogo de Productos</a></li>
                <li><a href="Gestion_Stock.html">Gestión de Stock</a></li>
                <li><a href="HistorialVenta.php">Historial de Ventas</a></li>
                <li><a href="Provedor.html">Proveedores</a></li>
                <li><a href="Ordenes.php">Órdenes de Compras</a></li>
            </ul>
        </nav>
    </header>

    <section class="order-section">
        <h2>Órdenes de Compras</h2>

        <form id="orderForm" method="post" action="../spatial/Conexion/Ordenes.php"> <!-- Cambia la acción a agregar_orden.php -->
            <div class="form-group">
                <label for="product">Producto:</label>
                <input type="text" id="product" name="product" required>
            </div>
            <div class="form-group">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="supplier">Proveedor:</label>
                <input type="text" id="supplier" name="supplier" required>
            </div>
            <button type="submit">Agregar Orden</button>
        </form>

        <!-- Incluir la tabla de órdenes desde el archivo separado -->
        <?php include '../spatial/Conexion/Mostrar_Ordenes.php'; ?>
    </section>

    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="#" class="icon fa-facebook"></a></li>
                <li><a href="#" class="icon fa-twitter"></a></li>
                <li><a href="#" class="icon fa-instagram"></a></li>
            </ul>
        </div>
    </footer>

    <div class="copyright">
        <a>SneakerHub</a>
    </div>
</body>
</html>
