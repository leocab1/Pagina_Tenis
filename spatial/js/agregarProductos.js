function agregarProducto(nombre, id, precio, stock) {
    const producto = {
        nombre: nombre,
        id: id,
        precio: precio,
        stock: stock
    };

    let productos = JSON.parse(localStorage.getItem('productos')) || [];

    productos.push(producto);

    localStorage.setItem('productos', JSON.stringify(productos));

    Swal.fire({
        title: 'Producto Agregado',
        text: `${nombre} ha sido agregado a tu carrito.`,
        icon: 'success',
        confirmButtonText: 'Aceptar',
        timer: 2000, 
    });
}


  const productCards = document.querySelectorAll('.card');
  
  // Obtener el contenedor donde mostraremos la cantidad de productos
  const productCountElement = document.getElementById('product-count');
  
  // Actualizar el texto del contenedor con la cantidad de productos
  productCountElement.textContent = `Total de productos: ${productCards.length}`;
