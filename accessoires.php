<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="icon" type="image/jpeg" href="logo shoe stor.jpeg" />
  <meta name="description" content="" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:alt" content="" />

  <link rel="icon" href="/favicon.ico" sizes="any" />
  <link rel="icon" href="/icon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="icon.png" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa" />
</head>

<head>
</head>

<body>

  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <div id="main">

    <div class="sidenav">
      <h1 class="filter-text">-Filters-</h1>

      <p id="font-adjust">-Category's-</p>
      <label class="container"> Shoes
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Pants
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Jackets
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Hoodies
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Belts
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Sunglasses
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Outerwear
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>

      <p id="font-adjust">- Popular Brands-</p>
      </label>
      <label class="container"> Supreme
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Nike Air Jordan
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Nike SB
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Asics
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Diesel
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <label class="container"> Gucci
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>

      <p id="font-adjust">-Price adjust-</p>

      <div class="slidecontainer">
        <input type="range" min="1" max="15000" value="" class="slider" id="myRange">
        <p id=price-amount>Amount: <span id="demo"></span></p>
      </div>
    </div>




    <div id="Shoes" class="product-container">

      <?php

      $array_titels = [
        "1DR logo-buckle leather belt",
        "C-Braff distressed-effect cap",
        "logo-print passport wallet",
        "GG1244S mask-frame sunglasses",
        "check cashmere scarf",
        "x New Era® box logo beanie",
        "GG Supreme leather belt",
        "dog vest",
        "SL572 square-frame tinted sunglasses",
        "Arrow belt",
        "Off Currency wallet",
        "Military Camp FW 23 baseball cap",
        "Symbole rectangle-frame sunglasses",
        "abstract-print iPhone 14 Plus case",
        "mask-shaped sunglasses",
        "Orb buckle belt",
        "x Ducati x Spidi C1 racing gloves",
        "Catalina square-frame sunglasses",
        "logo-stamp baseball cap",
        "intarsia-logo beanie hat"
      ];

      $array_prijzen = [
        189.99,
        89.99,
        919.99,
        1479.99,
        739.99,
        139.99,
        779.99,
        624.99,
        455.99,
        374.99,
        239.99,
        219.99,
        269.99,
        129.99,
        478.99,
        368.99,
        699.99,
        444.99,
        329.99,
        228.99
      ];

      $array_images = [
        "assets/img/diesel riem.webp",
        "assets/img/diesel cap effect.webp",
        "assets/img/logo-print passport wallet.webp",
        "assets/img/gucci eyewear.webp",
        "assets/img/burberry sjaal.webp",
        "assets/img/new era supreme.webp",
        "assets/img/gucci riem.webp",
        "assets/img/mocler dog veste.webp",
        "assets/img/SL572 square-frame tinted sunglasses.webp",
        "assets/img/arrow belt.webp",
        "assets/img/off wallet.webp",
        "assets/img/Military Camp FW 23 baseball cap.webp",
        "assets/img/Symbole rectangle-frame sunglasses.webp",
        "assets/img/abstract-print iPhone 14 Plus case.webp",
        "assets/img/mask-shaped sunglasses.webp",
        "assets/img/Orb buckle belt.webp",
        "assets/img/supreme gloves.webp",
        "assets/img/Catalina square-frame sunglasses.webp",
        "assets/img/logo-stamp baseball cap.webp",
        "assets/img/intarsia-logo beanie hat.webp"
      ];

      $array_brands = [
        "Diesel",
        "Diesel",
        "Balenciaga",
        "Gucci",
        "Burberry",
        "Supreme x New era",
        "Gucci",
        "Moncler x Poldo",
        "Saint-Laurent Eyewear",
        "Off-White",
        "Off-White",
        "Supreme",
        "Prada",
        "BAPE",
        "Guccie",
        "Vivienne Westwood",
        "Supreme",
        "Off-White",
        "Acne studios",
        "Supreme"
      ];

      $array_sizes = [
        "90 - 100 - 110",
        "One size",
        "One size",
        "One size",
        "One size",
        "One size",
        "90 - 110",
        "One size",
        "One size",
        "110 - 120",
        "One size",
        "One size",
        "One size",
        "iphone 14 plus",
        "One size",
        "110 - 120",
        "s - m - l - xl",
        "One size",
        "One size",
        "One size"
      ];

      $array_addtocart = [
        "addToCart('1DR logo-buckle leather belt', 189.99)",
        "addToCart('C-Braff distressed-effect cap', 89.99)",
        "addToCart('logo-print passport wallet', 919.99)",
        "addToCart('GG1244S mask-frame sunglasses', 1479.99)",
        "addToCart('check cashmere scarf', 739.99)",
        "addToCart('x New Era® box logo beanie', 139.99)",
        "addToCart('GG Supreme leather belt', 779.99)",
        "addToCart('dog vest', 624.99)",
        "addToCart('SL572 square-frame tinted sunglasses', 455.99)",
        "addToCart('Arrow belt', 374.99)",
        "addToCart('Off Currency wallet', 239.99)",
        "addToCart('Military Camp FW 23 baseball cap', 219.99)",
        "addToCart('Symbole rectangle-frame sunglasses', 269.99)",
        "addToCart('abstract-print iPhone 14 Plus case', 129.99)",
        "addToCart('mask-shaped sunglasses', 478.99)",
        "addToCart('Orb buckle belt', 368.99)",
        "addToCart('x Ducati x Spidi C1 racing gloves', 699.99)",
        "addToCart('Catalina square-frame sunglasses', 444.99)",
        "addToCart('logo-stamp baseball cap', 329.99)",
        "addToCart('intarsia-logo beanie hat', 228.99)"
      ];

      for ($a = 0; $a < count($array_titels); $a++) {


      ?>

        <div class="shoe">
          <h3><?php echo ($array_titels[$a]); ?></h3>
          <img
            src="<?php echo ($array_images[$a]) ?>"
            alt="Asics gel nyc cream mineral beige pink" />
          <p class="prijs">Price: -<?php echo ($array_prijzen[$a]); ?>-</p>
          <div class="info">
            <p><strong>Brand name:</strong> <?php echo ($array_brands[$a]); ?></p>
            <p><strong>Sizes Available:</strong> <?php echo ($array_sizes[$a]); ?></p>
            <button class="add-to-cart" onclick="<?php echo ($array_addtocart[$a]); ?>">Add to cart</button>
          </div>
        </div>

      <?php
      }
      ?>

    </div>

  </div>

  </div>
  <?php include 'includes/footer.php'; ?>
</body>
<script>
  function changeLanguage() {
    let lang = document.getElementById("language").value;
    "Language changed to: " + (lang === "de" ? "Deutsch" : "Nederlands");
  }
</script>
<script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }
  // ...existing code...

  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  function addToCart(productName, productPrice) {
    const product = {
      name: productName,
      price: productPrice,
      quantity: 1
    };

    // Check if the product is already in the cart
    const existingProduct = cart.find(item => item.name === productName);
    if (existingProduct) {
      existingProduct.quantity += 1;
    } else {
      cart.push(product);
    }

    // Save the cart to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    console.log(cart);
    alert(`${productName} has been added to your cart.`);
  }

  // ...existing code...
</script>

</html>