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

      $products = [

        [
          "title" => "1DR logo-buckle leather belt",
          "price" => 189.99,
          "image" => "assets/img/diesel riem.webp",
          "brand" => "Diesel",
          "sizes" => "90 - 100 - 110",
          "addToCart" => "addToCart('1DR logo-buckle leather belt', 189.99)"
        ],
        [
          "title" => "C-Braff distressed-effect cap",
          "price" => 89.99,
          "image" => "assets/img/diesel cap effect.webp",
          "brand" => "Diesel",
          "sizes" => "One size",
          "addToCart" => "addToCart('C-Braff distressed-effect cap', 89.99)"
        ],
        [
          "title" => "logo-print passport wallet",
          "price" => 919.99,
          "image" => "assets/img/logo-print passport wallet.webp",
          "brand" => "Balenciaga",
          "sizes" => "One size",
          "addToCart" => "addToCart('logo-print passport wallet', 919.99)"
        ],
        [
          "title" => "GG1244S mask-frame sunglasses",
          "price" => 1479.99,
          "image" => "assets/img/gucci eyewear.webp",
          "brand" => "Gucci",
          "sizes" => "One size",
          "addToCart" => "addToCart('GG1244S mask-frame sunglasses', 1479.99)"
        ],
        [
          "title" => "check cashmere scarf",
          "price" => 739.99,
          "image" => "assets/img/burberry sjaal.webp",
          "brand" => "Burberry",
          "sizes" => "One size",
          "addToCart" => "addToCart('check cashmere scarf', 739.99)"
        ],
        [
          "title" => "x New Era® box logo beanie",
          "price" => 139.99,
          "image" => "assets/img/new era supreme.webp",
          "brand" => "Supreme x New era",
          "sizes" => "One size",
          "addToCart" => "addToCart('x New Era® box logo beanie', 139.99)"
        ],
        [
          "title" => "GG Supreme leather belt",
          "price" => 779.99,
          "image" => "assets/img/gucci riem.webp",
          "brand" => "Gucci",
          "sizes" => "90 - 110",
          "addToCart" => "addToCart('GG Supreme leather belt', 779.99)"
        ],
        [
          "title" => "dog vest",
          "price" => 624.99,
          "image" => "assets/img/mocler dog veste.webp",
          "brand" => "Moncler x Poldo",
          "sizes" => "One size",
          "addToCart" => "addToCart('dog vest', 624.99)"
        ],
        [
          "title" => "SL572 square-frame tinted sunglasses",
          "price" => 455.99,
          "image" => "assets/img/SL572 square-frame tinted sunglasses.webp",
          "brand" => "Saint-Laurent Eyewear",
          "sizes" => "One size",
          "addToCart" => "addToCart('SL572 square-frame tinted sunglasses', 455.99)"
        ],
        [
          "title" => "Arrow belt",
          "price" => 374.99,
          "image" => "assets/img/arrow belt.webp",
          "brand" => "Off-White",
          "sizes" => "110 - 120",
          "addToCart" => "addToCart('Arrow belt', 374.99)"
        ],
        [
          "title" => "Off Currency wallet",
          "price" => 239.99,
          "image" => "assets/img/off wallet.webp",
          "brand" => "Off-White",
          "sizes" => "One size",
          "addToCart" => "addToCart('Off Currency wallet', 239.99)"
        ],
        [
          "title" => "Military Camp FW 23 baseball cap",
          "price" => 219.99,
          "image" => "assets/img/Military Camp FW 23 baseball cap.webp",
          "brand" => "Supreme",
          "sizes" => "One size",
          "addToCart" => "addToCart('Military Camp FW 23 baseball cap', 219.99)"
        ],
        [
          "title" => "Symbole rectangle-frame sunglasses",
          "price" => 269.99,
          "image" => "assets/img/Symbole rectangle-frame sunglasses.webp",
          "brand" => "Prada",
          "sizes" => "One size",
          "addToCart" => "addToCart('Symbole rectangle-frame sunglasses', 269.99)"
        ],
        [
          "title" => "abstract-print iPhone 14 Plus case",
          "price" => 129.99,
          "image" => "assets/img/abstract-print iPhone 14 Plus case.webp",
          "brand" => "BAPE",
          "sizes" => "iphone 14 plus",
          "addToCart" => "addToCart('abstract-print iPhone 14 Plus case', 129.99)"
        ],
        [
          "title" => "mask-shaped sunglasses",
          "price" => 478.99,
          "image" => "assets/img/mask-shaped sunglasses.webp",
          "brand" => "Guccie",
          "sizes" => "One size",
          "addToCart" => "addToCart('mask-shaped sunglasses', 478.99)"
        ],
        [
          "title" => "Orb buckle belt",
          "price" => 368.99,
          "image" => "assets/img/Orb buckle belt.webp",
          "brand" => "Vivienne Westwood",
          "sizes" => "110 - 120",
          "addToCart" => "addToCart('Orb buckle belt', 368.99)"
        ],
        [
          "title" => "x Ducati x Spidi C1 racing gloves",
          "price" => 699.99,
          "image" => "assets/img/supreme gloves.webp",
          "brand" => "Supreme",
          "sizes" => "s - m - l - xl",
          "addToCart" => "addToCart('x Ducati x Spidi C1 racing gloves', 699.99)"
        ],
        [
          "title" => "Catalina square-frame sunglasses",
          "price" => 444.99,
          "image" => "assets/img/Catalina square-frame sunglasses.webp",
          "brand" => "Off-White",
          "sizes" => "One size",
          "addToCart" => "addToCart('Catalina square-frame sunglasses', 444.99)"
        ],
        [
          "title" => "logo-stamp baseball cap",
          "price" => 329.99,
          "image" => "assets/img/logo-stamp baseball cap.webp",
          "brand" => "Acne studios",
          "sizes" => "One size",
          "addToCart" => "addToCart('logo-stamp baseball cap', 329.99)"
        ],
        [
          "title" => "intarsia-logo beanie hat",
          "price" => 228.99,
          "image" => "assets/img/intarsia-logo beanie hat.webp",
          "brand" => "Supreme",
          "sizes" => "One size",
          "addToCart" => "addToCart('intarsia-logo beanie hat', 228.99)"
          ]
        ];
     
           foreach ($products as $product) {
           ?>
             <div class="shoe">
               <h3><?php echo $product["title"]; ?></h3>
               <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["title"]; ?>" />
               <p class="prijs">Price: -<?php echo $product["price"]; ?>-</p>
               <div class="info">
             <p><strong>Brand name:</strong> <?php echo $product["brand"]; ?></p>
             <p><strong>Sizes Available:</strong> <?php echo $product["sizes"]; ?></p>
             <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>)">Add to cart</button>
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