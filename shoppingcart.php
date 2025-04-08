<?php
// Start de sessie
session_start();

// Vernietig de sessie om de winkelwagen te resetten
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Metadata en koppelingen naar CSS en lettertypen -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="assets/css/style.css?v=1.1" />

  <!-- Google Fonts voor styling -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- Inclusie van de header en navigatiebalk -->
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <main>
    <!-- Container voor de winkelwagen -->
    <div id="cart-container">
    </div>

    <?php
    // Variabele om de totale prijs bij te houden
    $totalPrice = 0;

    // Controleer of er een winkelwagen in de sessie is opgeslagen
    if (isset($_SESSION['cart'])) {
      // Loop door elk product in de winkelwagen
      foreach ($_SESSION['cart'] as $product) {
        echo '<div class="cart-item">';
        echo '<h3>' . $product['name'] . '</h3>'; // Toon de productnaam
        echo '<p>Unit Price: $' . $product['price'] . '</p>'; // Toon de eenheidsprijs
        echo '<p>Quantity: ' . $product['quantity'] . '</p>'; // Toon de hoeveelheid
        echo '<p>Total Price: $' . $product['price'] . '</p>'; // Toon de totale prijs
        $totalPrice += $product['price'] * $product['quantity']; // Bereken de totale prijs
        echo '<p>Brand: ' . $product['brand'] . '</p>'; // Toon het merk
        echo '<button class="cart-item" onclick="removeFromCart(' . $product['id'] . ')">Remove</button>'; // Verwijderknop
        echo '</div>';
      }
    }
    ?>
    <?php
    include 'includes/products.php'; // Inclusie van het productbestand

    // Haal de IDs van producten in de winkelwagen op
    $cartProductIds = [];
    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $cartItem) {
        $cartProductIds[] = $cartItem['id'];
      }
    }

    // Filter producten die niet in de winkelwagen zitten
    $availableProducts = array_filter($products, function ($product) use ($cartProductIds) {
      return !in_array($product['id'], $cartProductIds);
    });

    // Selecteer 5 willekeurige producten
    $randomProducts = [];
    if (count($availableProducts) > 0) {
      $randomKeys = array_rand($availableProducts, min(4, count($availableProducts)));
      foreach ((array) $randomKeys as $key) {
        $randomProducts[] = $availableProducts[$key];
      }
    }
    ?>

    <!-- Samenvatting van de winkelwagen -->
    <div id="cart-summary">
      <?php
      // Bereken de totale prijs exclusief BTW
      $totalVAT = $totalPrice / 121 * 100;

      // Toon de prijzen
      echo "Total Order Price (Excl. BTW): $" . number_format($totalVAT, 2) . "<br>";
      echo "Total Order Price (Incl. BTW): $" . number_format($totalPrice, 2) . "<br>";
      ?>
    </div>

    <!-- Knoppen om de winkelwagen te legen of naar de checkout te gaan -->
    <button class="clear-cart" onclick="clearCart()">Clear Cart</button>
    <a class="clear-cart" href="checkout.php">To checkout</a>

    <!-- Willekeurige producten sectie -->
    <div id="random-products">
      <h3>You might also like:</h3><br>
      <div class="product-container">
        <?php foreach ($randomProducts as $product): ?>
          <div class="shoe">
            <!-- Producttitel -->
            <h3><?php echo $product["title"]; ?></h3>

            <!-- Productafbeelding met link naar detailpagina -->
            <a href="detail.php?id=<?php echo $product["id"]; ?>">
              <img src="<?php echo $product["images"][0] ?>" alt="<?php echo $product["title"]; ?>" />
            </a>

            <!-- Productprijs -->
            <p class="prijs">Price: -$<?php echo $product["price"]; ?>-</p>

            <!-- Extra productinformatie -->
            <div class="info">
              <p><strong>Brand name:</strong> <?php echo $product["brand"]; ?></p>
              <p><strong>Sizes Available:</strong> <?php echo $product["sizes"]; ?></p>

              <!-- Knop om product aan winkelwagen toe te voegen -->
              <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>,'<?php echo $product["brand"]; ?>','<?php echo $product["sizes"]; ?>','<?php echo $product["id"]; ?>')">Add to cart</button>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

  </main>

  <script>
    // Functie om de winkelwagen weer te geven
    function displayCart() {
      const cart = JSON.parse(localStorage.getItem("cart")) || []; // Haal de winkelwagen op uit localStorage
      const cartContainer = document.getElementById("cart-container");
      const cartSummary = document.getElementById("cart-summary");
      cartContainer.innerHTML = ""; // Leeg de container
      cartSummary.innerHTML = ""; // Leeg de samenvatting

      // Controleer of de winkelwagen leeg is
      if (cart.length === 0) {
        cartContainer.innerHTML = "<p>Your cart is empty.</p>";
        return;
      }

      let totalOrderPrice = 0; // Totale prijs inclusief BTW
      let totalVAT = 0; // Totale prijs exclusief BTW

      // Loop door elk product in de winkelwagen
      cart.forEach((product, index) => {
        const productTotalPrice = product.price * product.quantity; // Bereken de totale prijs van het product
        totalOrderPrice += productTotalPrice; // Voeg toe aan de totale prijs

        // Maak een HTML-element voor het product
        const productElement = document.createElement("div");
        productElement.className = "cart-item";
        productElement.innerHTML = `
            <h3>${product.name}</h3>
            <p>Unit Price: $${product.price.toFixed(2)}</p>
            <p>Quantity: ${product.quantity}</p>
            <p>Total Price: $${productTotalPrice.toFixed(2)}</p>
            <button onclick="removeFromCart(${index})">Remove</button>
          `;
        cartContainer.appendChild(productElement); // Voeg het product toe aan de container
      });

      // Bereken de BTW en toon de samenvatting
      totalVAT = totalOrderPrice / 121 * 100;
      cartSummary.innerHTML = `
          <h3>Order Summary</h3>
          <p>Total Order Price (Excl. BTW): $${totalVAT.toFixed(2)} </p>
          <p>BTW (21%): $${(totalOrderPrice - totalVAT).toFixed(2)}</p>
          <p>Total Order Price (Incl. BTW): $${totalOrderPrice.toFixed(2)}</p>
        `;
    }

    // Functie om de winkelwagen te legen
    function clearCart() {
      localStorage.removeItem("cart"); // Verwijder de winkelwagen uit localStorage
      displayCart(); // Werk de weergave bij
    }

    // Functie om een product uit de winkelwagen te verwijderen
    function removeFromCart(index) {
      let cart = JSON.parse(localStorage.getItem("cart")) || []; // Haal de winkelwagen op
      cart.splice(index, 1); // Verwijder het product op de opgegeven index
      localStorage.setItem("cart", JSON.stringify(cart)); // Sla de bijgewerkte winkelwagen op
      displayCart(); // Werk de weergave bij
    }

    // Uncomment de volgende regel om de winkelwagen weer te geven bij het laden van de pagina
    // window.onload = displayCart;
  </script>

  <!-- Inclusie van de footer -->
  <?php include 'includes/footer.php'; ?>
</body>

<!-- Koppeling naar een extra JavaScript-bestand -->
<script src="assets/js/app.js"></script>

</html>