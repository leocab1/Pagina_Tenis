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
  <h1><strong><a href="./CompradorDash.php">SneakerHub</a></strong></h1>
  <nav id="nav">
    <ul>
      <li><a href="CatalogoDeProductos.php">Catálogo de Productos</a></li>
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
      <img src="../spatial/images/frustra.jpg" alt="Camisa 1">
      <h3>jersey pirma cruz azul local 24/25</h3>
      <p>Lleva los colores que amas desde pequeño a todas partes usando el Jersey Pirma Cruz Azul Local 24/25, esta equipación celebra los 60 años del ascenso del cuadro cementero.</p>
      <p><strong>Marca:</strong>Pirma</p>
      <p><strong>Precio:</strong> $1,699.00</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,699.00" class="button" onclick="agregarProducto('jersey pirma cruz azul local 24/25', 'Pirma', 250, 5)">
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
      <img src="../spatial/images/chulada.jpg" alt="Pantalones 1">
      <h3>jersey nike pumas unam local 24/25</h3>
      <p>Las equipaciones del cuadro universitario nunca decepcionan y el Jersey Nike Pumas UNAM Local 24/25 no es la excepción. Lleva los colores que amas desde pequeño a todas partes con esta nueva piel. .</p>
      <p><strong>Marca:</strong>Nike</p>
      <p><strong>Precio:</strong> $1,899.00</p>
      <p><strong>Stock:</strong> 10 unidades</p>
      <div data-tooltip="Precio:$1,899.00" class="button" onclick="agregarProducto('jersey nike pumas unam local 24/25', 'Nike', 250, 5)">
    
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
      <img src="https://tiendaclubpuebla.com/api/fileApi/images/124/8/jersey-local-1-1726268201177.jpg" alt="Chaqueta 1">
      <h3>Jersey Pirma Hombre Local Club Puebla 24-25 Blanco</h3>
      <p>"Los tonos de azul presentes en la camiseta de local nos recuerdan que La Franja ha cambiado de color pero la esencia siempre es la misma .</p>
      <p><strong>Marca:</strong>Pirma</p>
      <p><strong>Precio:</strong> $1,399.00</p>
      <p><strong>Stock:</strong> 155 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Jersey Pirma Hombre Local Club Puebla 24-25 Blanco', 'Pirma', 250, 5)">
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
      <img src="https://ss271.liverpool.com.mx/xl/1146427351.jpg" alt="Camisa 1">
      <h3>Camisa casual Dockers de algodón manga larga para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $750</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$750" class="button" onclick="agregarProducto('Camisa casual Dockers de algodón manga larga para hombre', 'Dockers', 750, 5)">
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
      <img src="../spatial/images/oper.avif" alt="Camisa 1">
      <h3>Camisa casual Dockers de algodón manga larga para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $1,399</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,399" class="button" onclick="agregarProducto('Camisa casual Dockers de algodón manga larga para hombre', 'Vans', 250, 5)">
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
      <img src="../spatial/images/ope.avif" alt="Camisa 1">
      <h3>Playera tipo polo Dockers T3 Polo para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $850</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$850" class="button" onclick="agregarProducto('Playera tipo polo Dockers T3 Polo para hombre', 'Dockers', 250, 5)">
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
      <img src="https://ss271.liverpool.com.mx/xl/1146748069.jpg" alt="Camisa 1">
      <h3>Playera tipo polo Dockers T3 POLO para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $700</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$700" class="button" onclick="agregarProducto('Playera tipo polo Dockers T3 POLO para hombre', 'Dockers', 250, 5)">
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
      <img src="https://ss251.liverpool.com.mx/xl/1156669225.jpg" alt="Camisa 1">
      <h3>Playera tipo polo American Eagle para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> American Eagle</p>
      <p><strong>Precio:</strong> $639.99</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$639.99" class="button" onclick="agregarProducto('Playera tipo polo American Eagle para hombre', 'American Eagle', 639.99, 5)">
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
      <img src="https://ss251.liverpool.com.mx/xl/1150904546.jpg" alt="Camisa 1">
      <h3>Playera tipo polo American Eagle Mens Ss Solid Po para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> American Eagle</p>
      <p><strong>Precio:</strong> $439.99</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$439.99" class="button" onclick="agregarProducto('Playera tipo polo American Eagle Mens Ss Solid Po para hombre', 'American Eagle', 439.99, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://ss223.liverpool.com.mx/xl/1128721416.jpg" alt="Camisa 1">
      <h3>Playera tipo polo para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Gap</p>
      <p><strong>Precio:</strong> $659.99</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$659.99" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://ss271.liverpool.com.mx/xl/1161100910.jpg" alt="Camisa 1">
      <h3>Camisa de vestir Dockers de algodón manga larga para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $1,999</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,999" class="button" onclick="agregarProducto('Camisa de vestir Dockers de algodón manga larga para hombre', 'Dockers', 1,999, 5)">
      </div>
    </div>
    <div class="card">
      <img src="../spatial/images/Dock.avif" alt="Camisa 1">
      <h3>Camisa de vestir Dockers de algodón manga larga para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Marca:</strong> Dockers</p>
      <p><strong>Precio:</strong> $1,999</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$1,999" class="button" onclick="agregarProducto('Camisa de vestir Dockers de algodón manga larga para hombre', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://ss271.liverpool.com.mx/xl/1138815869.jpg" alt="Camisa 1">
      <h3>Camisa casual Dioro de algodón manga larga para hombre</h3>
      <p>Comodidad y frescura para el día a día.</p>
      <p><strong>Maca:</strong> Dioro</p>
      <p><strong>Precio:</strong> $499</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$499" class="button" onclick="agregarProducto('Camisa casual Dioro de algodón manga larga para hombre', 'Dioro', 499, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1918564-800-auto?v=638578925004400000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Camisa Wilshire</h3>
      <p>Luce fabuloso a cuadros con la camisa Wilshire Mini Plaid Woven.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
    <div class="card">
      <img src="https://vansmx.vtexassets.com/arquivos/ids/1919534-800-auto?v=638578932760800000&width=800&height=auto&aspect=true" alt="Camisa 1">
      <h3>Sudadera Ranford Polar de medio cierre</h3>
      <p>Enfréntate a las temperaturas más frías con la sudadera.</p>
      <p><strong>Marca:</strong>Vans</p>
      <p><strong>Precio:</strong> $30</p>
      <p><strong>Stock:</strong> 15 unidades</p>
      <div data-tooltip="Precio:$120" class="button" onclick="agregarProducto('Sudadera Original Standards Varsity', 'Vans', 250, 5)">
      </div>
    </div>
  </div>
</section>


<nav id="mini-navbar">
  <a href="./RopaU.php" class="btn">Regresar Catalogo</a> 
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
