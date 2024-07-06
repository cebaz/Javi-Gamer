/*allProducts = JSON.parse(localStorage.getItem("allProducts"));
var productListDiv = document.getElementById("productList");

// Verificar si hay productos
if (allProducts && allProducts.length > 0) {
  // Iterar sobre cada producto
  allProducts.forEach(function(product) {
      // Crear un elemento div para mostrar los datos del producto
      var productDiv = document.createElement("div");
      
      // Construir el contenido HTML con los datos del producto
      var productHTML = "<p><strong>Título:</strong> " + product.title + "</p>" +
                        "<p><strong>Precio:</strong> $" + product.price + "</p>" +
                        "<p><strong>Cantidad:</strong> " + product.quantity + "</p>";
      
      // Establecer el contenido HTML en el div del producto
      productDiv.innerHTML = productHTML;
      
      // Agregar el div del producto al contenedor principal
      productListDiv.appendChild(productDiv);
  });
} else {
  // Mostrar un mensaje si no hay productos
  productListDiv.innerHTML = "<p>No hay productos disponibles.</p>";
}
localStorage.clear();