<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Ropa Mujer</title>
  <link rel="stylesheet" href="assets/css/main.css">
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
<br>


<nav id="mini-navbar">
  <a href="./CompradorProductos.php" class="btn">Catálogo Ropa</a> 
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
      <img src="https://app.cuidadoconelperro.com.mx/media/catalog/product/1/_/1_7662.jpg?width=768&optimize=low&bg-color=255,255,255&fit=bounds" alt="Playera">
      <h3>Jeans Mom Rotos Azul Claro</h3>
      <p>Jeans mom rotos azul claro con cierre frontal de botonadura y cremallera..</p>
      <p><strong>Marca:</strong>Cuidado con el Perro</p>
      <p><strong>Precio:</strong> $299.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="../spatial/images/camisa.webp" alt="Pantalones 1">
      <h3>Camisa Ambrosy manga corta</h3>
      <p>La camisa Ambrosy es una camisa de manga corta, plisada, con botones, con un agudo sentido del estilo y un borde de médula acabado para darle un toque extra de vuelo.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $999</p>
      <p><strong>Stock:</strong> 10 unidades</p>
      <div data-tooltip="Precio:$999" class="button" onclick="agregarProducto('Camisa Ambrosy manga corta', 'Vans', 999, 10)">
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
      <img src="../spatial/images/auuu.webp" alt="Chaqueta 1">
      <h3>Camisa Ambrosy manga corta</h3>
      <p>La camisa Ambrosy es una camisa de manga corta, plisada, con botones, con un agudo sentido del estilo y un borde de médula acabado para darle un toque extra de vuelo.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $999</p>
      <p><strong>Stock:</strong> 8 unidades</p>
      <div data-tooltip="Precio:$999" class="button" onclick="agregarProducto('Camisa Ambrosy manga corta', 'Vans', 599, 5)">
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
      <img src="../spatial/images/vaaaans.webp" alt="Camisa 1">
      <h3>Pantalón Sidewalk</h3>
      <p>El estilo clásico de la ropa de trabajo se moderniza con los pantalones Sidewalk. Estos pantalones cargo de lona ofrecen una pernera más ancha para una mayor comodidad durante todo el día, bolsillos cargo con fuelle, bolsillos oblicuos delanteros y puños con dobladillo.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $1,799.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,799.00" class="button" onclick="agregarProducto('Pantalón Sidewalk', 'Vans', 1,799.00, 5)">
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
      <img src="../spatial/images/mariposa.png" alt="Camisa 1">
      <h3>Sudadera con gorro DDM Mariposa</h3>
      <p>Vans celebra una de las tradiciones mexicanas más emblemáticas del país y más representativas en todo el mundo: el Día de Muertos. Para este 2024, nuestra ya clásica colección Día de Muertos rinde homenaje al viaje de la mariposa monarca como símbolo del viaje de nuestros seres queridos en el Día de Muertos.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $1,499</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,499" class="button" onclick="agregarProducto('Sudadera con gorro DDM Mariposa', 'Vans', 1,499, 5)">
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
      <img src="../spatial/images/vans.webp" alt="Camisa 1">
      <h3>Chamarra Bomber Benett</h3>
      <p>La chamarra bomber Bennett clásica tiene un sentido de estilo especial de Vans®. Confeccionada en elegante satén volador con relleno de poliéster, bolsillos delanteros inclinados y mangas fruncidas, estarás lista para cualquier cosa cuando te la pongas.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $499.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$2,699" class="button" onclick="agregarProducto('Chamarra Bomber Benett', 'Vans', 2,699, 15)">
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
      <img src="../spatial/images/eagle.webp" alt="Camisa 1">
      <h3>AE Suéter Extragrande con Cierre de un Cuarto</h3>
      <p>Sudadera blanca con capucha, bordado Chicago en negro y bolsillo canguro..</p>
      <p><strong>Marca:</strong> American Eagle</p>
      <p><strong>Precio:</strong> $1199.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1199.00" class="button" onclick="agregarProducto('AE Suéter Extragrande con Cierre de un Cuarto', 'American Eagle', 1199.00, 15)">
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
      <img src="../spatial/images/eagle uwu.webp" alt="Camisa 1">
      <h3>AE T-shirt Manga Larga de Felpa con Cuello Henley</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> American Eagle</p>
      <p><strong>Precio:</strong> $799.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$799.00" class="button" onclick="agregarProducto('AE T-shirt Manga Larga de Felpa con Cuello Henley', 'American Eagle', 799.00, 15)">
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
      <img src="../spatial/images/ancha.webp" alt="Camisa 1">
      <h3>Pantalón cargo Arroyo de pierna ancha </h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Vans</p>
      <p><strong>Precio:</strong> $1,499.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,499.00" class="button" onclick="agregarProducto('Pantalón cargo Arroyo de pierna ancha', 'Vans', 599, 15)">
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
      <img src="https://ss555.liverpool.com.mx/xl/1149772424_6p.jpg" alt="Camisa 1">
      <h3>Camisa de Algodón</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Tommy Hilfiger</p>
      <p><strong>Precio:</strong> $999.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="https://ss555.liverpool.com.mx/xl/1157821250.jpg" alt="Camisa 1">
      <h3>Playera manga corta Tommy Hilfiger cuello redondo para mujer</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Tommy Hilfiger</p>
      <p><strong>Precio:</strong> $799.00</p>
      <p><strong>Stock:</strong> 45 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="../spatial/images/80s.jpg" alt="Camisa 1">
      <h3>vestido adidas 80s</h3>
      <p>Para un look retro, cómodo y apto para el verano, usa el Vestido adidas 80s.</p>
      <p><strong>Marca:</strong> Adidas</p>
      <p><strong>Precio:</strong> $1,799.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="../spatial/images/cargo.jpg" alt="Camisa 1">
      <h3>pantalón nike cargo sportswear</h3>
      <p>El Breaking Olímpico estará presente en los Juegos Olímpicos y está colección de Nike lo representa. El Pantalón Nike Cargo Sportswear.</p>
      <p><strong>Marca:</strong> Nike</p>
      <p><strong>Precio:</strong> $1,139.40</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="../spatial/images/sportuwu.jpg" alt="Camisa 1">
      <h3>chamarra nike sportswear essential</h3>
      <p>La Chamarra Nike Sportswear Essential para mujeres tiene un estilo oversized con forro de malla que te permite adoptar el look bomber clásico cuando hace frío.</p>
      <p><strong>Marca:</strong> Nike</p>
      <p><strong>Precio:</strong> $1,589.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="../spatial/images/tomi.avif" alt="Camisa 1">
      <h3>Playera manga corta Tommy Hilfiger cuello redondo para mujer</h3>
      <p>Luce fabulosa con la playera manga corta Tommy Hilfiger.</p>
      <p><strong>Marca:</strong>Tommy Hilfiger</p>
      <p><strong>Precio:</strong> $439.00</p>
      <p><strong>Stock:</strong> 25 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
      <img src="../spatial//images/sport.jpg" alt="Chamarra">
      <h3>chamarra nike sportswear essential</h3>
      <p>Si quieres lucir algo fuera de lo ordinario, recomendamos la Chamarra Nike Sportswear Essential para mujeres que es una prenda elegante con un dobladillo high-low para una cobertura hasta debajo de las rodillas.</p>
      <p><strong>Marca:</strong>Nike</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$599" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 599, 5)">
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
  <a href="./RopaMcomp.php" class="btn">Regresar Catalogo</a> 
</nav>




<div class="copyright">
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/agregarProductos.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
