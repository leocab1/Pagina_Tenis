<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <link rel="stylesheet" href="../spatial/css/bolsaestilos.css">
    <link rel="stylesheet" href="../spatial/assets/css/main.css">
    <link rel="stylesheet" href="../spatial/css/eliminar.css">
    <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    .productos-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .producto-item {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 1rem 0;
    }
    .producto-imagen {
        width: 100px;
        height: auto;
        margin-right: 1rem;
    }
    .producto-detalle h3 {
        margin: 0;
        font-size: 1.2rem;
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


<div class="container">
    <h2>Información de Pago</h2>
    <form id="pago-form" action="../spatial/GuardarPa.php" method="POST">
        <div id="productos-list" class="productos-list"></div> <!-- Contenedor de productos -->
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <input type="hidden" id="productos" name="productos">
        <button type="submit" class="btn btn-primary">Generar Pago</button>
    </form>
</div>

<script>
    window.onload = function() {
        const productos = JSON.parse(localStorage.getItem('productos')) || [];
        document.getElementById('productos').value = JSON.stringify(productos);

        // Mostrar productos en el contenedor
        const productosList = document.getElementById('productos-list');
        productosList.innerHTML = productos.map(producto => `
            <div class="producto-item">
                <div class="producto-detalle">
                    <h3>${producto.nombre}</h3>
                    <p>Precio: $${producto.precio}</p>
                    <p>Cantidad: ${producto.cantidad}</p>
                </div>
            </div>
        `).join('');
    }

    // SweetAlert para confirmación y envío de datos
    document.getElementById('pago-form').addEventListener('submit', function(event) {
        event.preventDefault();

        Swal.fire({
            title: '¿Confirmar Pago?',
            text: '¿Estás seguro de que deseas realizar este pago?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, pagar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                const formData = new FormData(document.getElementById('pago-form'));

                fetch('../spatial/GuardarPa.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Pago Exitoso',
                            text: data.message,
                            icon: 'success'
                        }).then(() => {
                            localStorage.removeItem('productos');
                            window.location.href = './CompradorDash.php';
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: data.message,
                            icon: 'error'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Error',
                        text: 'Hubo un problema al procesar el pago.',
                        icon: 'error'
                    });
                });
            }
        });
    });
</script>

</body>
</html>
