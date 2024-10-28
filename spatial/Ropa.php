<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Ropa</title>
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
<br>


<!-- Mini Navbar -->
<nav id="mini-navbar">
  <a href="Ropa.php" class="btn">Catálogo Ropa</a> 
  <a href="ropaM.php" class="btn">Catálogo Ropa Mujer</a> 
  <a href="uwu.php" class="btn">Accesorios</a> 
  <a href="Gorras.php" class="btn">Gorros y Gorras</a> 
</nav>


<section class="search-section">
  <input type="number" id="min-price" placeholder="Precio mínimo...">
  <input type="number" id="max-price" placeholder="Precio máximo...">
  <button onclick="filterProducts()">Buscar</button>
</section>



<section class="product-cards">
  <div class="card-container">
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1937748-800-auto?v=638606487730930000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Sudadera Original Standards Varsity</h3>
      <p>La sudadera Original Standards Varsity Loose Crew representa versatilidad y estilo clásico.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919020-800-auto?v=638578928306100000&width=800&height=auto&aspect=true" alt="Pantalones 1">
      <h3>Pantalón Fatigue holgado de pierna cónica</h3>
      <p>Los pantalones Fatigue te brindan todo el estilo, comodidad, movilidad.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $50</p>
      <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1938053-800-auto?v=6386064893535700
      00&width=800&height=auto&aspect=true" alt="Chaqueta 1">
      <h3>Pantalón Original Standards holgado</h3>
      <p>Los pantalones holgados de forro polar Original Standards .</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $100</p>
      <p><strong>Stock:</strong> 8 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1918544-800-auto?v=638578924865370000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Camisa Westfield</h3>
      <p>Con muchos bolsillos para darle estilo y guardar cosas, la Camisa Westfield combina las mejores partes de
        una camisa y una chamarra para ayudarte a afrontar el clima más frío.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/ropa1.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1918564-800-auto?v=638578925004400000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Camisa Wilshire</h3>
      <p>Luce fabuloso a cuadros con la camisa Wilshire Mini Plaid Woven.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919534-800-auto?v=638578932760800000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Sudadera Ranford Polar de medio cierre</h3>
      <p>Enfréntate a las temperaturas más frías con la sudadera.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
  </div>
</section>


<nav id="mini-navbar">
  <a href="Ropa1.php" class="btn">Catalogo Siguiente</a> 
</nav>

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
