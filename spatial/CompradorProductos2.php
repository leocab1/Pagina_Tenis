<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Productos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="../spatial/assets/css/main.css">
  <link rel="stylesheet" href="../spatial/css/botoncompra.css">
  <link rel="stylesheet" href="../spatial/css/regresar.css">
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
<h2 id="product-count">

</h2> <!-- Aquí se mostrará la cantidad de productos -->
  <div class="card-container">
  <div class="card">
    <img src="images/minita.jpg" alt="Tenis 1">
    <h3>Nike Air Max</h3>
    <p>Comodidad y estilo en cada paso.</p>
    <p><strong>ID:</strong> 00123</p>
    <p><strong>Precio:</strong> $250</p>
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
      <img src="../spatial/images/boost.jpg" alt="Tenis 2">
      <h3>Adidas Ultraboost</h3>
      <p>Rendimiento y ligereza para correr.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Adidas Ultraboost', '00123', 250, 10)">
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
      <img src="../spatial/images/rs.jpg" alt="Tenis 3">
      <h3>Puma RS-X</h3>
      <p>Estilo retro con un toque moderno.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>


  <div data-tooltip="Precio:$120" class="button" class="button" onclick="agregarProducto('Puma RS-X', '00123', 250, 10)">
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
      <img src="./images/clas.jpg" alt="Tenis 4">
      <h3>Reebok Classic</h3>
      <p>Un clásico que nunca pasa de moda.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Reebok Classic', '00123', 250, 10)">
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
      <img src="../spatial/images/conver.jpg" alt="Tenis 5">
      <h3>Converse All Star</h3>
      <p>El ícono del calzado casual.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Converse All Star', '00123', 250, 10)">
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
      <img src="../spatial/images/old.jpg" alt="Tenis 6">
      <h3>Vans Old Skool</h3>
      <p>Estilo skater con personalidad única.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>



  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Vans Old Skool', '00123', 250, 10)">
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


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Jordan 1', '00123', 120, 10)">
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

  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Asics Gel-Lyte', '00123', 120, 10)">
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
      <h3>nike air force 1 07 triple white</h3>
      <p>Regresan unos de los sneakers más 
        históricos con los Tenis Nike Air
         Force 1 07 Triple White para hombres.</p>
         <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('nike air force 1 07 triple white', '00123', 120)">
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


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('NEW BALANCE - bb550', '00123', 120)">
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


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('nike cortez', '00123', 120)" >
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
      <img src="./images/nik.jpg" alt="Tenis 8">
      <h3>nike full force</h3>
      <p>Los Tenis Casual Jordan Full Force de Hombre encarnan la fusión perfecta entre el legado icónico de Michael Jordan .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>


  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('nike full force', '00123', 120)">
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
      <img src="./images/air.jpg" alt="Tenis 8">
      <h3>nike air max solo</h3>
      <p>Comienza a pensar en los mejores conjuntos con estos tenis casuales Nike Air Max Solo .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $650.20</p>
  <p><strong>Stock:</strong> 10 unidades</p>

  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('00123', 'nike air max solo', 650.20)">
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
  <img src="./images/mid.png" alt="Tenis 8">
  <h3>blazer mid 77 vntg</h3>
  <p>Los Tenis Nike Blazer Mid 77 Vintage White Black para hombres son un clásico de la década de los 70s.</p>
  <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('blazer mid 77 vntg','00123',  120)" >
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
  <img src="./images/zoom.jpg" alt="Tenis 8">
  <h3>zoom vomero 5 sp</h3>
  <p>Siente cómo la energía fluye a través de tus pies.</p>
  <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $80</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio: $80" class="button" onclick="agregarProducto('zoom vomero 5 sp', '00123', 80)">
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
  <img src="./images/ad.png" alt="Tenis 8">
  <h3>Forum Low White Royal Blue</h3>
  <p>Tenis casuales estilos new.</p>
  <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
  <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Forum Low White Royal Blue', '00123', 120)">
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
    </div>
    
  </div>
</section>


<div id="content">
    <nav id="mini-navbar">
        <a href="#" class="btn" id="animate-btn" onclick="animar()">Catálogo Siguiente</a>
    </nav>
</div>
<div id="fullscreen-anim"></div>





<!-- Footer -->
<footer id="footer">
  <div class="container">
    
  </div>
</footer>
<div class="copyright">
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/agregarProductos.js"></script>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Seleccionar todas las tarjetas que tienen la clase 'card'
    const productCards = document.querySelectorAll('.card');
    
    // Contar cuántas tarjetas hay
    const productCount = productCards.length;
    
    // Seleccionar el elemento <h2> donde se mostrará el número de productos
    const productCountElement = document.getElementById('product-count');
    
    // Mostrar el conteo de productos dentro del <h2>
    if (productCountElement) {
      productCountElement.textContent = `Número de productos: ${productCount}`;
    }
  });
</script>

<script src="../spatial/js/animacion.js"></script>

</body>
</html>
