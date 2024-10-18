<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerHub - Catálogo de Productos</title>
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
      <img src="../spatial/images//minita.jpg" alt="Tenis 1">
      <h3>Nike Air Max</h3>
      <p>Comodidad y estilo en cada paso.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $250</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/boost.jpg" alt="Tenis 2">
      <h3>Adidas Ultraboost</h3>
      <p>Rendimiento y ligereza para correr.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/rs.jpg" alt="Tenis 3">
      <h3>Puma RS-X</h3>
      <p>Estilo retro con un toque moderno.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/clas.jpg" alt="Tenis 4">
      <h3>Reebok Classic</h3>
      <p>Un clásico que nunca pasa de moda.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/conver.jpg" alt="Tenis 5">
      <h3>Converse All Star</h3>
      <p>El ícono del calzado casual.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/old.jpg" alt="Tenis 6">
      <h3>Vans Old Skool</h3>
      <p>Estilo skater con personalidad única.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="../spatial/images/jordan.jpg" alt="Tenis 7">
      <h3>Jordan 1</h3>
      <p>Diseñado para los más atrevidos.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/gel.jpg" alt="Tenis 8">
      <h3>Asics Gel-Lyte</h3>
      <p>Comodidad para largas caminatas.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
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
    </div>
    <div class="card">
      <img src="./images/bb.jpg" alt="Tenis 8">
      <h3>NEW BALANCE - bb550</h3>
      <p>Explora el equilibrio perfecto entre estilo retro .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/cor.jpg" alt="Tenis 8">
      <h3>nike cortez</h3>
      <p>Los Nike Cortez Black White son una verdadera obra maestra del calzado urbano.</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/nik.jpg" alt="Tenis 8">
      <h3>nike full force</h3>
      <p>Los Tenis Casual Jordan Full Force de Hombre encarnan la fusión perfecta entre el legado icónico de Michael Jordan .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/air.jpg" alt="Tenis 8">
      <h3>nike air max solo</h3>
      <p>Comienza a pensar en los mejores conjuntos con estos tenis casuales Nike Air Max Solo .</p>
      <p><strong>ID:</strong> 00123</p>
  <p><strong>Precio:</strong> $120</p>
  <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/mid.png" alt="Tenis 8">
      <h3>blazer mid 77 vntg</h3>
      <p>Los Tenis Nike Blazer Mid 77 Vintage White Black para hombres son un clásico de la década de los 70s .</p>
        <p><strong>ID:</strong> 00123</p>
         <p><strong>Precio:</strong> $120</p>
        <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/zoom.jpg" alt="Tenis 8">
      <h3>zoom vomero 5 sp</h3>
      <p>Siente cómo la energía fluye a través de tus pies.</p>
      <p><strong>ID:</strong> 00123</p>
     <p><strong>Precio:</strong> $80</p>
     <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    <div class="card">
      <img src="./images/ad.png" alt="Tenis 8">
      <h3>forum low white royal blue</h3>
      <p>Tenis casuales estilos new.</p>
      <p><strong>ID:</strong> 00123</p>
     <p><strong>Precio:</strong> $120</p>
     <p><strong>Stock:</strong> 10 unidades</p>
    </div>
    
  </div>
</section>




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
