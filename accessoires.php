<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>
  <link rel="stylesheet" href="assets/css/style.css?v1.1" />
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

    <?php
    include 'includes/sidenav.php';
    ?>

    <div id="Shoes" class="product-container">

      <?php

      include 'includes/productaccesoires.php';

      foreach ($products as $product) {
      ?>
        <div class="shoe">
          <h3><?php echo $product["title"]; ?></h3>
          <a href="detail.php?id=<?php echo $product["id"]; ?>">
            <img src="<?php echo $product["images"][0] ?>" alt="<?php echo $product["title"]; ?>" />
          </a>
          <p class="prijs">Price: -$<?php echo $product["price"]; ?>-</p>
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


  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  function addToCart(productName, productPrice) {
    const product = {
      name: productName,
      price: productPrice,
      quantity: 1
    };

    const existingProduct = cart.find(item => item.name === productName);
    if (existingProduct) {
      existingProduct.quantity += 1;
    } else {
      cart.push(product);
    }


    localStorage.setItem('cart', JSON.stringify(cart));

    console.log(cart);
    alert(`${productName} has been added to your cart.`);
  }
</script>

</html>