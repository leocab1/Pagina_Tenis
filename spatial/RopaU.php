<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Ropa</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="../spatial/css/botoncompra.css">
  <link rel="stylesheet" href="../spatial/assets/css/Card.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
      <li><a href="CompradorProductos.php">Catálogo de Productos</a></li>
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
<h2 id="product-count"></h2>



<section class="product-cards">
  <div class="card-container">
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1937748-800-auto?v=638606487730930000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Sudadera Original Standards Varsity</h3>
      <p>La sudadera Original Standards Varsity Loose Crew representa versatilidad y estilo clásico.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>  
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
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919020-800-auto?v=638578928306100000&width=800&height=auto&aspect=true" alt="Pantalones 1">
      <h3>Pantalón Fatigue holgado de pierna cónica</h3>
      <p>Los pantalones Fatigue te brindan todo el estilo, comodidad, movilidad.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $50</p>
      <p><strong>Stock:</strong> 10 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Pantalón Fatigue holgado de pierna cónica', 'Vans', 250, 5)">
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
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1938053-800-auto?v=6386064893535700
      00&width=800&height=auto&aspect=true" alt="Chaqueta 1">
      <h3>Pantalón Original Standards holgado</h3>
      <p>Los pantalones holgados de forro polar Original Standards .</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $100</p>
      <p><strong>Stock:</strong> 8 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Pantalón Original Standards holgado', 'Vans', 250, 5)">
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
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1918544-800-auto?v=638578924865370000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Camisa Westfield</h3>
      <p>Con muchos bolsillos para darle estilo y guardar cosas, la Camisa Westfield combina las mejores partes de
        una camisa y una chamarra para ayudarte a afrontar el clima más frío.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Camisa Westfield', 'Vans', 250, 5)">
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
      <img src="../spatial/images/morenouwu.avif" alt="Camisa 1">
      <h3>Jersey de Manchester United visitante ADIDAS para hombre</h3>
      <p>Manchester United, Visitante.</p>
      <p><strong>ID:</strong> R001</p>
      <p><strong>Precio:</strong> $1,250</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,250" class="button" onclick="agregarProducto('Manchester United, Visitante.', 'adidas', 250, 5)">
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
      <img src="https://ss205.liverpool.com.mx/xl/1123938601.jpg" alt="Camisa 1">
      <h3>Jersey de Selección Nacional de México local ADIDAS para hombre      </h3>
      <p>Selección Nacional de México.</p>
      <p><strong>Marca:</strong> Adidas</p>
      <p><strong>Precio:</strong> $1119.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Jersey de Selección Nacional de México local ', 'Adidas', 250, 5)">
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
      <img src="https://ss205.liverpool.com.mx/xl/1126239421.jpg" alt="Camisa 1">
      <h3>Jersey de Cruz Azul Joma para hombre</h3>
      <p>Club de Fútbol Cruz Azul, Futbol.</p>
      <p><strong>Marca:</strong> Joma</p>
      <p><strong>Precio:</strong> $1499.20</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Club de Fútbol Cruz Azul, Futbol', 'Pirma', 250, 5)">
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
      <img src="../spatial/images/uwuuuuu.avif" alt="Camisa 1">
      <h3>Sudadera sin capucha y logo</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Hollister</p>
      <p><strong>Precio:</strong> $690</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera sin capucha y logo', 'Hollister', 250, 5)">
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
      <img src="../spatial/images/lacosteuwu.avif" alt="Camisa 1">
      <h3>Sudadera Lacoste para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Lacoste</p>
      <p><strong>Precio:</strong> $3,990,00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Lacoste para hombre', 'Lacoste', 250, 5)">
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
      <img src="https://ss251.liverpool.com.mx/xl/1154618976.jpg" alt="Camisa 1">
      <h3>Sudadera Levi's para hombre</h3>
      <p> Levis, Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Adidas</p>
      <p><strong>Precio:</strong> $1,999.0</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Levis para hombre', 'Levis', 1,999.0, 5)">
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
      <img src="https://ss245.liverpool.com.mx/xl/1153198973.jpg" alt="Jeans">
      <h3>Jeans slim Tommy Jeans lavado obscuro para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Tommy</p>
      <p><strong>Precio:</strong> $750</p>
      <p><strong>Stock:</strong> 45 unidades</p>
      <div data-tooltip="Precio:$750" class="button" onclick="agregarProducto('Jeans slim Tommy Jeans lavado obscuro para hombre', 'Tommy', 250, 5)">
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
      <img src="../spatial/images/hollister.avif" alt="Camisa 1">
      <h3>Sudadera Hollister para hombre</h3>
      <p>hollister, Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Hollister</p>
      <p><strong>Precio:</strong> $1,290.0</p>
      <p><strong>Stock:</strong> 75 unidades</p>
      <div data-tooltip="Precio:$1,290.0" class="button" onclick="agregarProducto('Sudadera Hollister para hombre', 'Hollister', 1,290.0, 5)">
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
      <img src="../spatial/images/jean.avif" alt="Camisa 1">
      <h3>Jeans straight lavado obscuro para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Gap</p>
      <p><strong>Precio:</strong> $450</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$450" class="button" onclick="agregarProducto('Jeans straight lavado obscuro para hombre', 'Gap', 250, 5)">
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
      <img src="https://ss271.liverpool.com.mx/xl/1144811344.jpg" alt="Camisa 1">
      <h3>Sudadera Fox para hombre</h3>
      <p>Producto con licencia oficial de Honda. El tejido polar combina comodidad, calidez y estilo. Interior cepillado suave. Ojales y herretes recubiertos de silicona. Cremallera frontal completa con tirador con el logo de Fox.</p>
      <p><strong>Marca:</strong> Fox</p>
      <p><strong>Precio:</strong> $900</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Fox para hombre', 'Fox', 900, 5)">
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
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1918564-800-auto?v=638578925004400000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Camisa Wilshire</h3>
      <p>Luce fabuloso a cuadros con la camisa Wilshire Mini Plaid Woven.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Camisa Wilshire', 'Vans', 250, 5)">
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
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919534-800-auto?v=638578932760800000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Sudadera Ranford Polar de medio cierre</h3>
      <p>Enfréntate a las temperaturas más frías con la sudadera.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Ranford Polar de medio cierre', 'Vans', 250, 5)">
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
  <a href="./RopaU1.php" class="btn">Catalogo Siguiente</a> 
</nav>

<br>
<br>
<br>

<div class="copyright">
  <p>&copy; SneakerHub</p>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../spatial/js/agregarProductos.js"></script>


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




</body>
</html>
