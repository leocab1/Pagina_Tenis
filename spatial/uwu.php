<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Accesorios</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="../spatial/assets/css/Card.css">
  <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
</head>
<body class="landing">

<header id="header">
  <h1><strong><a href="index.php">SneakerHub</a></strong></h1>
  <nav id="nav">
    <ul>
      <li><a href="CatalogoDeProductos.php">Catálogo de Productos</a></li>
      <li><a href="Gestion_Stock.html">Gestión de Stock</a></li>
      <li><a href="HistorialVenta.php">Historial de Ventas</a></li>
      <li><a href="ordenes.php">Órdenes de Compras</a></li>
      <li><a href="../spatial/Conexion/cerrar.php">Cerrar Sesión</a></li>
    </ul>
  </nav>
</header>

<br>
<br>
<br>


<!-- Mini Navbar -->
<nav id="mini-navbar">
  <a href="CatalogoDeProductos.php" class="btn">Catálogo De Tenis</a> 
  <a href="Ropa.php" class="btn">Catálogo Ropa Mujer</a> 
  <a href="uwu.php" class="btn">Accesorios</a> 
  <a href="Gorras.php" class="btn">Gorros y Gorras</a> 
</nav>


<section class="search-section">
  <input type="number" id="min-price" placeholder="Precio mínimo...">
  <input type="number" id="max-price" placeholder="Precio máximo...">
  <button onclick="filterProducts()">Buscar</button>
</section>


<section class="product-cards">
  <h2 style="text-align: center;">Accesorios</h2>
  <div class="card-container">
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1454874-800-auto?v=638453342867570000&width=800&height=auto&aspect=true" alt="Cartera">
      <h3>Cartera Slipped</h3>
      <p>La cartera Slipped está hecha 100% de poliéster con tres pliegues y estampado a cuadros. Cuenta con una amplia compartimento para billetes, ranuras para tarjetas, una ventana para tu 
        identificación y un bolsillo 
        para monedas.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $359</p>
      <p><strong>Stock:</strong> 25 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1507202-800-auto?v=638454277033130000&width=800&height=auto&aspect=true" alt="Lentes">
      <h3>Spicoli Blanco/Negro</h3>
      <p>Los lentes de sol Spicoli 4 están fabricados 100% de policarbonato con el logo de Vans en relieve a la altura de la sien y protección UVA/UVB 400.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $320</p>
      <p><strong>Stock:</strong> 30 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1892261-800-auto?v=638575376979400000&width=800&height=auto&aspect=true" alt="Gorro 2">
      <h3>Beanie Original Shallow Cuff</h3>
      <p>Perfecto para mantenerte abrigado durante el invierno.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $399.99</p>
      <p><strong>Stock:</strong> 20 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1939447-800-auto?v=638606549548500000&width=800&height=auto&aspect=true" alt="Gorra 2">
      <h3>Beanie Core Basics</h3>
      <p>El gorro Core Basics está confeccionado 100 % en acrílico y tiene una etiqueta con clip de Vans.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $399</p>
      <p><strong>Stock:</strong> 10 unidades</p>
    </div>
  </div>
</section>

<!-- Footer -->
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
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
