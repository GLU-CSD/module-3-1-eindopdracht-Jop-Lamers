<?php
session_start();
// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="assets/css/style.css?v=1.1" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <main>
    <div id="cart-container">
    </div>
    <?php
    $totalPrice = 0;
    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $product) {
        echo '<div class="cart-item">';
        echo '<h3>' . $product['name'] . '</h3>';
        echo '<p>Unit Price: $' . $product['price'] . '</p>';
        echo '<p>Quantity: ' . $product['quantity'] . '</p>';
        echo '<p>Total Price: $' . $product['price'] . '</p>';
        $totalPrice += $product['price'] * $product['quantity'];
        echo '<p>Brand: ' . $product['brand'] . '</p>';
        echo '<button class="cart-item" onclick="removeFromCart(' . $product['id'] . ')">Remove</button>';
        echo '</div>';
      }
    }
    ?>
    <div id="cart-summary">

      <?php
      $totalVAT = $totalPrice / 121 * 100;
      echo "Total Order Price (Excl. BTW): $$totalVAT,- <br>";
      echo "Total Order Price (Incl. BTW): $$totalPrice,- <br>";

      ?>
    </div>
    <button class="clear-cart" onclick="clearCart()">Clear Cart</button>
    <a class="clear-cart" href="checkout.php">To checkout</a>
  </main>

  <script>
    function displayCart() {
      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      const cartContainer = document.getElementById("cart-container");
      const cartSummary = document.getElementById("cart-summary");
      cartContainer.innerHTML = "";
      cartSummary.innerHTML = "";

      if (cart.length === 0) {
        cartContainer.innerHTML = "<p>Your cart is empty.</p>";
        return;
      }

      let totalOrderPrice = 0;
      let totalVAT = 0;

      cart.forEach((product, index) => {
        const productTotalPrice = product.price * product.quantity;
        totalOrderPrice += productTotalPrice;

        const productElement = document.createElement("div");
        productElement.className = "cart-item";
        productElement.innerHTML = `
            <h3>${product.name}</h3>
            <p>Unit Price: $${product.price.toFixed(2)}</p>
            <p>Quantity: ${product.quantity}</p>
            <p>Total Price: $${productTotalPrice.toFixed(2)}</p>
            <button onclick="removeFromCart(${index})">Remove</button>
          `;
        cartContainer.appendChild(productElement);
      });


      totalVAT = totalOrderPrice / 121 * 100;

      cartSummary.innerHTML = `
          <h3>Order Summary</h3>
          <p>Total Order Price (Excl. BTW): $${totalVAT.toFixed(2)} </p>
          <p>BTW (21%): $${(totalOrderPrice - totalVAT).toFixed(2)}</p>
          <p>Total Order Price (Incl. BTW): $${totalOrderPrice.toFixed(2)}</p>
        `;
    }

    function clearCart() {
      localStorage.removeItem("cart");
      displayCart();
    }

    function removeFromCart(index) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      displayCart();
    }

    // window.onload = displayCart;
  </script>

  <?php
  include 'includes/footer.php'; ?>
</body>

<script src="assets/js/app.js"></script>

</html>