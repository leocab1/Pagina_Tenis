<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/Historial.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
    <title>SneakerHub - Historial</title>
</head>

<body class="landing">
    <header id="header">
        <h1><strong><a href="index.php">SneakerHub</a></strong></h1>
        <nav id="nav">
            <ul>
                <li><a href="CatalogoDeProductos.php">Catálogo de Productos</a></li>
                <li><a href="Gestion_Stock.html">Gestión de Stock</a></li>
                <li><a href="HistorialVenta.php">Historial de Ventas</a></li>
                <li><a href="Provedor.html">Proveedores</a></li>
                <li><a href="ordenes.php">Órdenes de Compras</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <section class="order-section">
        <br>
        <h2>Órdenes de Compras</h2>

        <!-- Incluir la tabla de órdenes de compra -->
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

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
