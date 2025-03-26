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

      include 'includes/productsclothing.php';

      foreach ($products as $product) {
      ?>
        <div class="shoe">
          <h3><?php echo $product["title"]; ?></h3>
          <img src="<?php echo $product["images"][0]; ?>" alt="<?php echo $product["title"]; ?>" />
          <p class="prijs">Price: -$<?php echo $product["price"]; ?>-</p>
          <div class="info">
            <p><strong>Brand name:</strong> <?php echo $product["brand"]; ?></p>
            <p><strong>Sizes Available:</strong> <?php echo $product["sizes"]; ?></p>
            <a href="detail.php ?id=<?php echo $product["id"]; ?>">View Details</a>
            <br></br>
            <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>)">Add to cart</button>
          </div>
        </div>
      <?php
      }
      ?>

    </div>

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