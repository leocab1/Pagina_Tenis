function filterProducts() {
    const minPrice = parseFloat(document.getElementById('min-price').value) || 0; // Obtiene el precio mínimo
    const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity; // Obtiene el precio máximo
    const cards = document.querySelectorAll('.card'); // Selecciona todas las tarjetas de producto
  
    cards.forEach(card => {
      const priceText = card.querySelector('p:nth-child(4)').textContent; // Obtiene el texto del precio
      const price = parseFloat(priceText.replace(/[^0-9.-]+/g,"")); // Extrae solo el número del texto
  
      // Verifica si el precio está dentro del rango especificado
      if (price >= minPrice && price <= maxPrice) {
        card.style.display = ''; // Muestra la tarjeta
      } else {
        card.style.display = 'none'; // Oculta la tarjeta
      }
    });
  }