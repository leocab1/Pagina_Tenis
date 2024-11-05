<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Productos</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="../spatial/css/botoncompra.css">
  <link rel="stylesheet" href="../spatial/assets/css/Card.css">
  <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
  <style>
    #product-count {
      color: #7d41bd;
      font-size: 2rem;
      font-weight: bold; 
      text-align: center;
      margin-top: 20px;
    }
  </style>
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
      <img src="../spatial/images/725.jpg" alt="Tenis 1">
      <h3>tenis-new-balance-725-grey</h3>
      <p>Descubre el equilibrio perfecto entre estilo y comodidad con los Tenis Casual New Balance 725 Grey de Hombre.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $2,999.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
  <div class="button-wrapper"></div>
  <div class="text">Agregar</div>
  <span class="icon">
  <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
        </svg>
  </span>
    </div>
    </div>
    <div class="card">
      <img src="../spatial/images/txt.jpg" alt="Tenis 2">
      <h3>nike cortez txt</h3>
      <p>En el mundo de la moda masculina, los clásicos atemporales son reverenciados por su capacidad para fusionar estilo y autenticidad.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $1,469.30</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="https://www.innvictus.com/medias/IN-GV9544-1.jpg?context=bWFzdGVyfGltYWdlc3w5ODc4MXxpbWFnZS9qcGVnfGFXMWhaMlZ6TDJoaFppOW9NVFV2TVRFME9UUTRNRFEwTWpJMk9EWXVhbkJufGVmMDZjYWQyOTExMzA1MjQ2OWMxYjgzMmNlYThiZGFhYmEyY2QwNDYyNzk2YzMyYjg5ZTRiZDk3MmJmYTRkOWE" alt="Tenis 3">
      <h3>adi2000</h3>
      <p>Llénate de una vibra dosmiles con estos tenis casuales adidas ADI2000.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $2,399.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Nike Air Max', '00123', 250, 10)">
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
      <img src="https://www.innvictus.com/medias/IN-HJ4497-100-1.jpg?context=bWFzdGVyfGltYWdlc3w5NjMxMHxpbWFnZS9qcGVnfGFXMWhaMlZ6TDJoa1ppOW9ZMkl2TVRJMU5EZzBNVEl5TVRFeU16QXVhbkJufGU4ZjQ2NjRjMzc5NjU5M2RjNjRhN2ExODhmZWJjNDA1MWFhMGRhN2M1MmJiZTg0MTc5MjBhOTUzMWM3ZTc2Zjg" alt="Tenis 4">
      <h3>nike v2k run</h3>
      <p>Los tenis casuales Nike Run V2K para hombre son la opción perfecta.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $1,679.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Nike Air Max', '00123', 250, 10)">

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
      <img src="../spatial/images/ozmi.jpg" alt="Tenis 5">
      <h3>ozmillen</h3>
      <p>Embárcate en una odisea de estilo y confort con los tenis casuales adidas Ozmillen para hombre..</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $1,679.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Nike Air Max', '00123', 250, 10)">
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
      <img src="../spatial/images/gaze.jpg" alt="Tenis 6">
      <h3>tenis adidas gazelle</h3>
      <p>Estilo unico y Fresco.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $1,469.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="../spatial/images/jordan.jpg" alt="Tenis 7">
      <h3>Jordan 1</h3>
      <p>Diseñado para los más atrevidos.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/gel.jpg" alt="Tenis 8">
      <h3>Asics Gel-Lyte</h3>
      <p>Comodidad para largas caminatas.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">

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
      <img src="./images/force.png" alt="Tenis 8">
      <h3>tenis nike air force 1 07 triple white</h3>
      <p>Regresan unos de los sneakers más 
        históricos con los Tenis Nike Air
         Force 1 07 Triple White para hombres.</p>
         <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">

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
      <img src="./images/bb.jpg" alt="Tenis 8">
      <h3>NEW BALANCE - bb550</h3>
      <p>Explora el equilibrio perfecto entre estilo retro .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/cor.jpg" alt="Tenis 8">
      <h3>nike cortez</h3>
      <p>Los Nike Cortez Black White son una verdadera obra maestra del calzado urbano.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/funk.jpg" alt="Tenis 8">
      <h3>adidas ozmillen funk</h3>
      <p>Tenis Casuales, Super Comodos .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $2,399.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/trini.jpg" alt="Tenis 8">
      <h3>tenis puma trinity</h3>
      <p>Los tenis casuales Puma Trinity para hombre son la opción ideal para aquellos que buscan un equilibrio .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $1,999.00</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/palermo.jpg" alt="Tenis 8">
      <h3>puma palermo</h3>
      <p>Sumérgete en el estilo urbano y la comodidad con los Tenis Casual Puma Palermo para hombre. .</p>
        <p><strong>ID:</strong> 00123</p>
         <p><strong>Precio:</strong> $1,999.00</p>
        <p><strong>Stock:</strong> 10 unidades</p>
        <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/seoul.jpg" alt="Tenis 8">
      <h3>seoul</h3>
      <p>Apuesta por el par de tenis Puma Seoul y luce una silueta que es una declaración de estilo superior..</p>
      <p><strong>ID:</strong> 00123</p>
     <p><strong>Precio:</strong> $1,899.00</p>
     <p><strong>Stock:</strong> 10 unidades</p>
     <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
      <img src="./images/327.jpg" alt="Tenis 8">
      <h3>327</h3>
      <p>Lleva un gran estilo a la ciudad usando los Tenis New Balance 327, con este par estarás listo para cualquier actividad social. .</p>
      <p><strong>ID:</strong> 00123</p>
     <p><strong>Precio:</strong> $2,599.00</p>
     <p><strong>Stock:</strong> 10 unidades</p>
     <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
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
  <a href="./CompradorProductos.php" class="btn">Regresar Catalogo</a> 
</nav>

<br>
<br>
<br>
<div class="copyright">
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="../spatial/js/animacion.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="../spatial/js/agregarProductos.js"></script>
<script src="../spatial/js//filtrarPrecioGorros.js"></script>





</body>
</html>
