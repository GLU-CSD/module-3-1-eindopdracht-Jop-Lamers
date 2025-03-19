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
        "Archive denim trucker jacket",
        "Brim FW 22 zip-up hoodie",
        "Andre 3000 photograph-print T-shirt",
        "x CCM All Stars hockey jersey T-shirt",
        "Box Logo hoodie",
        "Box Logo hoodie",
        "Box Logo hoodie",
        "box logo hoodie",
        "Arc logo zip hoodie",
        "x The North Face Baltoro padded jacket",
        "Trompe L'oeil bomber jacket",
        "x The North Face Nuptse jacket",
        "S.Matthew cotton track pants",
        "Levis Wreath-print straight-leg jeans",
        "x Damiano David P-Martyans sweatpants",
        "ToFF graphic-print slim-fit jeans",
        "logo-print drawstring sweatpants",
        "Glory track pants",
        "logo-print straight-leg jeans",
        "Blown jeans"
      ];
      $array_prijzen = [
        1049.99,
        574.99,
        327.99,
        465.99,
        529.99,
        529.99,
        529.99,
        529.99,
        749.99,
        2074.99,
        1379.99,
        1579.99,
        289.99,
        249.99,
        287.99,
        1868.99,
        680.99,
        1074.99,
        1346.99,
        728.99
      ];
      $array_images = [
        "assets/img/supreme.webp",
        "assets/img/zip hoodie supreme.webp",
        "assets/img/supreme shirt met man erop.webp",
        "assets/img/supreme jersey.webp",
        "assets/img/beige Box Logo hoodie.webp",
        "assets/img/box logo grijs.webp",
        "assets/img/box logo zwart.webp",
        "assets/img/box logo roze.webp",
        "assets/img/arc logo zip hoodie.webp",
        "assets/img/x The North Face Baltoro padded jacket.webp",
        "assets/img/Trompe L'oeil bomber jacket.webp",
        "assets/img/x The North Face Nuptse jacket.webp",
        "assets/img/S.Matthew cotton track pants.webp",
        "assets/img/x Levi's Cotton Wreath-print straight-leg jeans.webp",
        "assets/img/x Damiano David P-Martyans sweatpants.webp",
        "assets/img/x ToFF graphic-print slim-fit jeans.webp",
        "assets/img/logo-print drawstring sweatpants.webp",
        "assets/img/Glory track pants.webp",
        "assets/img/logo-print straight-leg jeans.webp",
        "assets/img/Blown jeans.webp"
      ];
      $array_brands = [
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme",
        "Supreme | The North Face",
        "Supreme",
        "Supreme | The North Face",
        "Off-White",
        "Denim Tears x levi's",
        "Diesel",
        "Diesel",
        "Palm Angels",
        "Who Decides War",
        "Heron Preston",
        "Who Decides War"
      ];
      $array_sizes = [
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl",
        "xs - s - m - l - xl"
      ];
      $array_addtocart = [
        "addToCart('Archive denim trucker jacket', 1049.99)",
        "addToCart('Brim FW 22 zip-up hoodie', 574.99)",
        "addToCart('Andre 3000 photograph-print T-shirt', 327.99)",
        "addToCart('x CCM All Stars hockey jersey T-shirt', 465.99)",
        "addToCart('Box Logo hoodie', 529.99)",
        "addToCart('Box Logo hoodie', 529.99)",
        "addToCart('Box Logo hoodie', 529.99)",
        "addToCart('box logo hoodie', 529.99)",
        "addToCart('Arc logo zip hoodie', 749.99)",
        "addToCart('x The North Face Baltoro padded jacket', 2074.99)",
        "addToCart('Trompe Loeil bomber jacket', 1379.99)",
        "addToCart('x The North Face Nuptse jacket', 1579.99)",
        "addToCart('S.Matthew cotton track pants', 289.99)",
        "addToCart('Levis Wreath-print straight-leg jeans', 249.99)",
        "addToCart('x Damiano David P-Martyans sweatpants', 287.99)",
        "addToCart('ToFF graphic-print slim-fit jeans', 1868.99)",
        "addToCart('logo-print drawstring sweatpants', 680.99)",
        "addToCart('Glory track pants', 1074.99)",
        "addToCart('logo-print straight-leg jeans', 1346.99)",
        "addToCart('Blown jeans', 728.99)"
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

      --
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