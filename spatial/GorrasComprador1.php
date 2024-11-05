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
    <div class="card">
      <img src="../spatial/images/azul.webp" alt="Gorro 1">
      <h3>Beani Densmore</h3>
      <p>El gorro con borde vuelto ancho Densmore Wide luce el logotipo de la marca en la parte delantera y mide 19 cm de altura.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $499</p>
      <p><strong>Stock:</strong> 25 unidades</p>
      <div data-tooltip="Precio:$499" class="button" onclick="agregarProducto('Beani Densmores', 'Vans', 499, 10)">
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
    <div class="card">
      <img src="../spatial/images/amañiño.webp" alt="Gorra 1">
      <h3>Beanie Core Basic</h3>
      <p>El gorro Core Basics es un gorro con puños 100 % acrílico y etiqueta de abrazadera tejida.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $399</p>
      <p><strong>Stock:</strong> 30 unidades</p>
      <div data-tooltip="Precio:$399" class="button" onclick="agregarProducto('Beanie Core Basic', 'Vans', 399, 10)">
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
    <div class="card">
      <img src="../spatial/images/morado.png" alt="Gorro 2">
      <h3>Gorra Hosmer</h3>
      <p>La gorra Hosmer con visera curvada luce un diseño de 6 paneles con cierre trasero ajustable y viene decorada con el logotipo de la marca en la parte delantera.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $549</p>
      <p><strong>Stock:</strong> 20 unidades</p>
      <div data-tooltip="Precio:$549" class="button" onclick="agregarProducto('Gorra Hosmer', 'Vans', 399.99, 20)">
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
    <div class="card">
      <img src="../spatial/images/data.png" alt="Gorra 2">
      <h3>Gorra Data system</h3>
      <p>La gorra Data System es una gorra de 5 paneles hecha de algodón duradero, con cierre de correa en la parte posterior y bordado directo en el costado.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $549</p>
      <p><strong>Stock:</strong> 10 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Beanie Core Basics', 'Vans', 549, 10)">
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
  <a href="./GorrasComprador.php" class="btn">Catálogo Anterior</a> 
</nav>


<div class="copyright">
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
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
