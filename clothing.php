<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <!-- Metadata en basisinstellingen voor de pagina -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>
  
  <!-- CSS-stylesheet koppelen -->
  <link rel="stylesheet" href="assets/css/style.css?v1.1" />
  
  <!-- Favicon instellen -->
  <link rel="icon" type="image/jpeg" href="logo shoe stor.jpeg" />
  
  <!-- SEO en sociale media metadata -->
  <meta name="description" content="" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:alt" content="" />

  <!-- Extra iconen voor verschillende apparaten -->
  <link rel="icon" href="/favicon.ico" sizes="any" />
  <link rel="icon" href="/icon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="icon.png" />

  <!-- Google Fonts koppelen -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Thema-kleur instellen -->
  <meta name="theme-color" content="#fafafa" />
</head>

<body>

  <!-- Header en navigatiebalk invoegen -->
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <div id="main">
    <!-- Zijmenu invoegen -->
    <?php include 'includes/sidenav.php'; ?>

    <!-- Productcontainer voor kleding -->
    <div id="Shoes" class="product-container">

      <?php
      // Productgegevens ophalen en weergeven
      include 'includes/productsclothing.php';

      // Door elk product in de lijst itereren
      foreach ($products as $product) {
      ?>
        <div class="shoe">
          <!-- Producttitel weergeven -->
          <h3><?php echo $product["title"]; ?></h3>
          
          <!-- Link naar productdetails met afbeelding -->
          <a href="detail.php?id=<?php echo $product["id"]; ?>">
            <img src="<?php echo $product["images"][0] ?>" alt="<?php echo $product["title"]; ?>" />
          </a>
          
          <!-- Prijs van het product -->
          <p class="prijs">Price: -$<?php echo $product["price"]; ?>-</p>
          
          <!-- Extra productinformatie -->
          <div class="info">
            <p><strong>Brand name:</strong> <?php echo $product["brand"]; ?></p>
            <p><strong>Sizes Available:</strong> <?php echo $product["sizes"]; ?></p>
            
            <!-- Knop om product aan winkelwagen toe te voegen -->
            <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>)">Add to cart</button>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>

  <!-- Footer invoegen -->
  <?php include 'includes/footer.php'; ?>
</body>

<script>
  // Functie om de taal te wijzigen (placeholder)
  function changeLanguage() {
    let lang = document.getElementById("language").value;
    "Language changed to: " + (lang === "de" ? "Deutsch" : "Nederlands");
  }

  // Slider functionaliteit
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }

  // Winkelwagen functionaliteit
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Product toevoegen aan winkelwagen
  function addToCart(productName, productPrice) {
    const product = {
      name: productName,
      price: productPrice,
      quantity: 1
    };

    // Controleren of product al in winkelwagen zit
    const existingProduct = cart.find(item => item.name === productName);
    if (existingProduct) {
      existingProduct.quantity += 1; // Aantal verhogen als het al bestaat
    } else {
      cart.push(product); // Nieuw product toevoegen
    }

    // Winkelwagen opslaan in localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Bevestigingsmelding
    console.log(cart);
    alert(`${productName} has been added to your cart.`);
  }
</script>

<!-- Externe JavaScript-bestand koppelen -->
<script src="assets/js/app.js"></script>
</html>