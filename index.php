<?php
// Start de sessie
session_start();

// Vernietig de sessie om de winkelwagen te resetten
//session_destroy();
?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <!-- Metadata en basisinstellingen -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>
  
  <!-- CSS-stylesheet koppelen -->
  <link rel="stylesheet" href="assets/css/style.css?v=1.1" />
  
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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  
  <!-- Thema-kleur instellen -->
  <meta name="theme-color" content="#fafafa" />
</head>

<body>

  <!-- Header en navigatiebalk insluiten -->
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <div id="main">
    <!-- Zijmenu insluiten -->
    <?php include 'includes/sidenav.php'; ?>

    <!-- Productcontainer voor schoenen -->
    <div id="Shoes" class="product-container">

      <?php
      // Productgegevens insluiten
      include 'includes/productsshoes.php';
      ?>

      <!-- Loop door alle producten en toon ze -->
      <?php foreach ($products as $product): ?>
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

  <!-- Footer insluiten -->
  <?php include 'includes/footer.php'; ?>
</body>

<script>
  // Functie om taal te wijzigen (placeholder)
  function changeLanguage() {
    let lang = document.getElementById("language").value;
    "Language changed to: " + (lang === "de" ? "Deutsch" : "Nederlands");
  }
</script>

<script>
  // Slider functionaliteit
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }

  // Winkelwagen functionaliteit
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  function addToCart(productName, productPrice, productBrand, productSizes, productid) {
    // Functie om product toe te voegen aan winkelwagen
    winkelWagenAdd();
    const product = {
      name: productName,
      price: productPrice,
      quantity: 1,
      brand: productBrand,
      sizes: productSizes,
      id: productid,
    };

    // AJAX-verzoek om product toe te voegen aan server-side winkelwagen
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'xhr_addtocart.php', product);
    xhr.onload = function() {
      // Hier kun je de serverrespons verwerken
      console.log(this.responseText);
    }
    const data = JSON.stringify(product);
    const formData = new FormData();
    formData.append('product', data);
    xhr.send(formData);

    // Controleer of product al in winkelwagen zit
    const existingProduct = cart.find(item => item.name === productName);
    if (existingProduct) {
      existingProduct.quantity += 1;
    } else {
      cart.push(product);
    }

    // Winkelwagen opslaan in localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Toon melding aan gebruiker
    console.log(cart);
    alert(`${productName} has been added to your cart.`);
  }
</script>

<!-- Externe JavaScript-bestand koppelen -->
<script src="assets/js/app.js"></script>

</html>