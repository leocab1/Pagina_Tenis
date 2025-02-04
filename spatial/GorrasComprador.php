<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Gorros y Gorras</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<link rel="stylesheet" href="../spatial/css/botoncompra.css">
  <link rel="stylesheet" href="../spatial/assets/css/Card.css">
  <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
</head>

<style>
    #product-count {
    color: #7d41bd;
    font-size: 2rem;
    font-weight: bold; 
    text-align: center;
    margin-top: 20px;
  }

</style>


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

<!-- Mini Navbar -->
<nav id="mini-navbar">
  <a href="./CompradorProductos.php" class="btn">Catálogo De Tenis</a> 
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
<h2 id="product-count"></h2>



<section class="product-cards">
  <h2 style="text-align: center;">Catálogo de Gorros y Gorras</h2>
  <div class="card-container">
    <div class="card" data-price="465">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1937663-800-auto?v=638606487092930000&width=800&height=auto&aspect=true" alt="Gorro 1">
      <h3>Gorra Vans 66 Structured</h3>
      <p>Comodidad y estilo para cualquier ocasión.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $465</p>
      <p><strong>Stock:</strong> 25 unidades</p>
      <div data-tooltip="Precio:$465" class="button" onclick="agregarProducto('Gorra Vans 66 Structured', 'Vans', 465, 10)">
      <div class="button-wrapper">
      <div class="text">Agregar</div>
      <span class="icon">
        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
        </svg>
      </span>
    </div>  
    </div>
    </div>
    <div class="card" data-price="320">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1939448-800-auto?v=638606549599630000&width=800&height=auto&aspect=true" alt="Gorra 1">
      <h3>Beanie Waffle Cuff</h3>
      <p>Diseño moderno y ajustable para mayor comodidad.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $320</p>
      <p><strong>Stock:</strong> 30 unidades</p>
      <div data-tooltip="Precio:$320" class="button" onclick="agregarProducto('Beanie Waffle Cuff', 'Vans', 399, 10)">
      <div class="button-wrapper">
      <div class="text">Agregar</div>
      <span class="icon">
        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
        </svg>
      </span>
    </div>  
    </div>
    </div>
    <div class="card" data-price="399.9">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1892261-800-auto?v=638575376979400000&width=800&height=auto&aspect=true" alt="Gorro 2">
      <h3>Beanie Original Shallow Cuff</h3>
      <p>Perfecto para mantenerte abrigado durante el invierno.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $399.99</p>
      <p><strong>Stock:</strong> 20 unidades</p>
      <div data-tooltip="Precio:$399.99" class="button" onclick="agregarProducto('Beanie Original Shallow Cuff', 'Vans', 399.99, 20)">
      <div class="button-wrapper">
      <div class="text">Agregar</div>
      <span class="icon">
        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
        </svg>
      </span>
    </div> 
    </div>
    </div>
    <div class="card" data-price="399">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1939447-800-auto?v=638606549548500000&width=800&height=auto&aspect=true" alt="Gorra 2">
      <h3>Beanie Core Basics</h3>
      <p>El gorro Core Basics está confeccionado 100 % en acrílico y tiene una etiqueta con clip de Vans.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $399</p>
      <p><strong>Stock:</strong> 10 unidades</p>
      <div data-tooltip="Precio:$399" class="button" onclick="agregarProducto('Beanie Core Basics', 'Vans', 399, 10)">
      <div class="button-wrapper">
      <div class="text">Agregar</div>
      <span class="icon">
        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
        </svg>
      </span>
    </div>
    </div>
    </div>
  </div>
</section>


<nav id="mini-navbar">
  <a href="./GorrasComprador1.php" class="btn">Catálogo Siguiente</a> 
</nav>

<div class="copyright">
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="../spatial/js/filtrarPrecioGorros.js"></script>
<script src="assets/js/main.js"></script>
<script src="../spatial/js/agregarProductos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




<script>
  document.addEventListener("DOMContentLoaded", function() {
    const productCards = document.querySelectorAll('.card');
    
    const productCount = productCards.length;
    
    const productCountElement = document.getElementById('product-count');
    
    if (productCountElement) {
      productCountElement.textContent = `Número de productos: ${productCount}`;
    }
  });
</script>

<script src="../spatial/js/animacion.js"></script>



</body>
</html>
