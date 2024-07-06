<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>FACTURA</title>
    <link rel="icon" href="../img/icono.jpeg" type="img/x-icon">
</head>
<body>
    <div id="header">
        <div class="botons">
            <a class="btn" href="admin-index.html">Inicio</a>
            <a class="btn" href="cuenta-admin.php">Cuenta</a>
            <a class="btn" href="admin.php">Tablas</a>
            <a class="btn" href="stock.html">Reponer Stock</a>
        </div>
        <h1 id="title">JAVI GAMER</h1>
    </div>
    <main>  
      <div id="amarillo">
        <div>Cliente: administrador</div>
        <div>
        <p>Numero de factura</p>
        <p>Fecha 29/2/2024</p>
        </div>
      </div>

      <div id="rojo">
        <div class="titulo">Nombre</div>
        <div class="titulo">Cantidad</div>
        <div class="titulo">Precio</div>
        <div class="titulo">Total</div>
      </div>

      <div id="azul">
        <div></div>
        <div id="dib">
          <div id="Subtotal">
          </div>
          <div id="IVA">
          </div>
          <br>
          <div id="Total">
          </div>
        </div>
        </div>
      </div>
    </main>
    
<div id="productList"></div>
        <script>
          allProducts = JSON.parse(localStorage.getItem("allProducts"));
          var productListDiv = document.getElementById("rojo");
          var Sub = 0;


          if (allProducts && allProducts.length > 0) {
            allProducts.forEach(function(product) {

                var total = product.price * product.quantity;
                console.log(typeof(product.price));

                var titleDiv = document.createElement("div");
                titleDiv.classList.add("son");
                titleDiv.textContent = product.title;
                productListDiv.appendChild(titleDiv);


                var quantityDiv = document.createElement("div");
                quantityDiv.classList.add("son");
                quantityDiv.textContent = product.quantity;
                productListDiv.appendChild(quantityDiv);


                var priceDiv = document.createElement("div");
                priceDiv.classList.add("son");
                priceDiv.textContent = '$' + product.price;
                productListDiv.appendChild(priceDiv);

                
                var totalDiv = document.createElement("div");
                totalDiv.classList.add("son");
                totalDiv.textContent = '$' + total;
                productListDiv.appendChild(totalDiv);

                Sub += total;
            });

          } else {
            productListDiv.innerHTML = "<p>No hay productos disponibles.</p>";
          }

          var Subtotal = document.getElementById("Subtotal");
          var IVA = document.getElementById("IVA");
          var Tot = document.getElementById("Total");
          var iba = Sub * 0.16
          var Ttotal = Sub +  iba;

          Subtotal.textContent = 'Subtotal:  $' + Sub;
          IVA.textContent = 'IVA:    $' + iba + '(16%)';
          Tot.textContent = 'Total:    $' + Ttotal
          localStorage.clear();
        </script>
</body>
</html>