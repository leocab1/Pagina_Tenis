<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Ropa Mujer</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <link rel="stylesheet" href="../spatial/assets/css/Card.css">
  <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
</head>
<body class="landing">

<header id="header">
  <h1><strong><a href="./CompradorDash.php">SneakerHub</a></strong></h1>
  <nav id="nav">
    <ul>
      <li><a href="./CompradorProductos.php">Catálogo de Productos</a></li>
      <li><a href="../spatial/bolsa.php">Bolsa Productos</a></li>
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
  <a href="./RopaU.php" class="btn">Catálogo Ropa</a> 
  <a href="./RopaMcomp.php" class="btn">Catálogo Ropa Mujer</a> 
  <a href="./AccesorioComprador.php" class="btn">Accesorios</a> 
  <a href="./GorrasComprador.php" class="btn">Gorros y Gorras</a> 
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
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919108-800-auto?v=638578929252500000&width=800&height=auto&aspect=true" alt="Pantalones 1">
      <h3>Playera corta First Team Relax</h3>
      <p>La playera corta First Team Relax es una playera de manga corta, corte relajado y confeccionada con un jersey de algodón grueso.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $650</p>
      <p><strong>Stock:</strong> 10 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1914455-800-auto?v=638578893880730000&width=800&height=auto&aspect=true" alt="Chaqueta 1">
      <h3>Playera tank Drew Rib</h3>
      <p>Diseñada para ser tu prenda básica favorita, la camiseta sin mangas Drew Rib se puede usar en capas o sola .</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $580</p>
      <p><strong>Stock:</strong> 8 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1914335-800-auto?v=638578892905700000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Playera Blackout Floral</h3>
      <p>La Blackout Floral Crew es una camiseta de manga corta con cuello redondo confeccionada con un algodón más pesado, presenta un gráfico floral al frente..</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $899</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919661-800-auto?v=638578933750430000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Chaleco SYD</h3>
      <p>Una pieza clásica confeccionada con el estilo singular de Vans®, el chaleco Syd tiene escote en V, dobladillos acanalados y un lavado ácido en toda su extensión para ayudarte a destacar entre la multitud.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/2/_/2_12561.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Overol Largo de Mezclilla</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $499.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_12498.jpg?width=1920&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Sudadera con Capucha y Bordado Blanca</h3>
      <p>Sudadera blanca con capucha, bordado Chicago en negro y bolsillo canguro..</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $279.99</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_10575.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Jeans Recto de Mezclilla Azul Claro</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $329.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="../spatial/images/BONITA.avif" alt="Camisa 1">
      <h3>Suéter American Eagle cuello polo para mujer</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Amercian Eagle</p>
      <p><strong>Precio:</strong> $750</p>
      <p><strong>Stock:</strong> 75 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="../spatial/images/the.avif" alt="Camisa 1">
      <h3>Chamarra The North Face para mujer</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> The North Face</p>
      <p><strong>Precio:</strong> $2,000</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="../spatial/images/face.avif" alt="Camisa 1">
      <h3>Chamarra The North Face para mujer</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> The North Face</p>
      <p><strong>Precio:</strong> $1,150</p>
      <p><strong>Stock:</strong> 7 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_12593.jpg?width=1920&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Overol Negro de Corte Largo</h3>
      <p>Construido con un forro polar cálido, suave y totalmente reciclado, el TNF Polartec 100 1/4-Zip para mujer es la capa que necesita para una comodidad durante todo el año dentro y fuera del sendero.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $499.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_7462.jpg?width=1920&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $299.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/5/_/5_2031.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Camisa 1">
      <h3>Jeans Flare de Mezclilla Azul Claro</h3>
      <p>Pantalón flare azul claro de cinco bolsillos, en mezclilla stretch y botón metálico..</p>
      <p><strong>Marca:</strong> Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $299.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="../spatial/images/thee.avif" alt="Camisa 1">
      <h3>Chamarra casual The North Face para mujer</h3>
      <p>The North Face.</p>
      <p><strong>Marca:</strong>The North Face</p>
      <p><strong>Precio:</strong> $2,250</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="../spatial/images/theeee.avif" alt="Camisa 1">
      <h3>Chamarra casual The North Face para mujer</h3>
      <p>En los días fríos al aire libre o en casa, no puedes equivocarte con esta chamarra de fleece muy suave, un modelo popular 
        que regresa para una nueva temporada de aventuras.</p>
      <p><strong>Marca:</strong>The North Face</p>
      <p><strong>Precio:</strong> $3,500.0</p>
      <p><strong>Stock:</strong> 5 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
  </div>
</section>

<nav id="mini-navbar">
  <a href="./RopaMU.php" class="btn">Catálogo Siguiente</a> 
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
<script src="../spatial/js/agregarProductos.js"></script>
</body>
</html>
