<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de Compras</title>
    <link rel="stylesheet" href="../spatial/css/bolsaestilos.css">
    <link rel="stylesheet" href="../spatial/assets/css/main.css">
    <link rel="stylesheet" href="../spatial/css/eliminar.css">
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

<br><br><br><br><br>

<div class="container">
    <ul id="lista-productos"></ul>
    <div class="total">
        <strong>Total: $<span id="total-cantidad">0.00</span></strong>
    </div>
    <div class="buttons">
        <button class="pagar-bolsa" onclick="irAPagar()">Ir a Pagar</button>
        <button class="vaciar-bolsa" onclick="vaciarBolsa()">Vaciar Bolsa</button>
    </div>
</div>

<script>
    // Obtener los productos del Local Storage
    let productos = JSON.parse(localStorage.getItem('productos')) || [];

    // Mostrar los productos en la lista y calcular el total
    const listaProductos = document.getElementById('lista-productos');
    const totalCantidad = document.getElementById('total-cantidad');
    let total = 0;

    productos.forEach(producto => {
        const item = document.createElement('li');
        item.className = 'producto';

        total += producto.precio;

        item.innerHTML = `
            <div class="producto-info">
                <strong>${producto.nombre}</strong><br>
                ID: ${producto.id}<br>
                <span class="precio">$${producto.precio.toFixed(2)}</span> - Stock: ${producto.stock} unidades
            </div>
            <button class="noselect" onclick="eliminarProducto('${producto.id}')">
                <span class="text">Eliminar</span>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                    </svg>
                </span>
            </button>
        `;

        listaProductos.appendChild(item);
    });

    // Actualizar el total mostrado en la interfaz
    totalCantidad.textContent = total.toFixed(2);

    function eliminarProducto(id) {
        productos = productos.filter(producto => producto.id !== id);
        localStorage.setItem('productos', JSON.stringify(productos));
        location.reload();
    }

    function vaciarBolsa() {
        localStorage.removeItem('productos');
        location.reload();
    }

    function irAPagar() {
        window.location.href = "./Comprador_pago.php";
    }
</script>

</body>
</html>
