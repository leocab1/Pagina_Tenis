<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Ropa Mujer</title>
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
  <div class="card-container">
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1946564-800-auto?v=638629024308870000&width=800&height=auto&aspect=true" alt="Playera">
      <h3>Playera corta sin mangas</h3>
      <p>La playera corta sin mangas ajustada es una playera confeccionada con un tejido de punto de algodón pesado y presenta un gráfico de dados en llamas de Vans® en la parte delantera.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $599</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919108-800-auto?v=638578929252500000&width=800&height=auto&aspect=true" alt="Pantalones 1">
      <h3>Playera corta First Team Relax</h3>
      <p>La playera corta First Team Relax es una playera de manga corta, corte relajado y confeccionada con un jersey de algodón grueso.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $650</p>
      <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1914455-800-auto?v=638578893880730000&width=800&height=auto&aspect=true" alt="Chaqueta 1">
      <h3>Playera tank Drew Rib</h3>
      <p>Diseñada para ser tu prenda básica favorita, la camiseta sin mangas Drew Rib se puede usar en capas o sola .</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $580</p>
      <p><strong>Stock:</strong> 8 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1914335-800-auto?v=638578892905700000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Playera Blackout Floral</h3>
      <p>La Blackout Floral Crew es una camiseta de manga corta con cuello redondo confeccionada con un algodón más pesado, presenta un gráfico floral al frente..</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $899</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919661-800-auto?v=638578933750430000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Chaleco SYD</h3>
      <p>Una pieza clásica confeccionada con el estilo singular de Vans®, el chaleco Syd tiene escote en V, dobladillos acanalados y un lavado ácido en toda su extensión para ayudarte a destacar entre la multitud.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/2/_/2_12561.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Overol Largo de Mezclilla</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $499.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_12498.jpg?width=1920&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Sudadera con Capucha y Bordado Blanca</h3>
      <p>Sudadera blanca con capucha, bordado Chicago en negro y bolsillo canguro..</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $279.99</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_10575.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Jeans Recto de Mezclilla Azul Claro</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $329.00</p>
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
      <img src="https://ss553.liverpool.com.mx/xl/1145995232.jpg" alt="Camisa 1">
      <h3>Blusa Dockers manga larga para mujer</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $679.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://ss553.liverpool.com.mx/xl/1158780889.jpg" alt="Camisa 1">
      <h3>Playera manga corta Dockers cuello redondo para mujer</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $700</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_12593.jpg?width=1920&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Overol Negro de Corte Largo</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $499.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_7462.jpg?width=1920&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $299.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/5/_/5_2031.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Jeans Flare de Mezclilla Azul Claro</h3>
      <p>Pantalón flare azul claro de cinco bolsillos, en mezclilla stretch y botón metálico..</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $299.00</p>
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
      <img src="https://ss533.liverpool.com.mx/xl/1161465417.jpg" alt="Camisa 1">
      <h3>Punt Roma</h3>
      <p>Enfréntate a las temperaturas más frías con la sudadera.</p>
      <p><strong>Marca:</strong>Punt Roma</p>
      <p><strong>Precio:</strong> $450</p>
      <p><strong>Stock:</strong> 15 unidades</p>
    </div>
  </div>
</section>

<nav id="mini-navbar">
  <a href="RopaM1.php" class="btn">Catálogo Siguiente</a> 
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
