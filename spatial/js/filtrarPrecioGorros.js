document.addEventListener("DOMContentLoaded", function() {
    const productCards = document.querySelectorAll('.card');
    const productCount = productCards.length;
    const productCountElement = document.getElementById('product-count');
  
    if (productCountElement) {
      productCountElement.textContent = `Número de productos: ${productCount}`;
    }
  
    // Agregar eventos a los campos de precio
    document.getElementById('min-price').addEventListener('input', filterProducts);
    document.getElementById('max-price').addEventListener('input', filterProducts);
  });
  
  function filterProducts() {
    const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
    const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;
    const productCards = document.querySelectorAll('.card');
  
    let visibleCount = 0;
  
    productCards.forEach(card => {
      const price = parseFloat(card.getAttribute('data-price'));
  
      if (price >= minPrice && price <= maxPrice) {
        card.style.display = 'block';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });
  
    const productCountElement = document.getElementById('product-count');
    productCountElement.textContent = `Número de productos: ${visibleCount}`;
  }
  