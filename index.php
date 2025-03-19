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
        "Asics gel nyc cream beige pink",
        "Asics gel nyc cream kale",
        "Asics gel nyc panelled",
        "Asics gel-NYC smoke grey",
        "x Gnarhunters SB Dunk Low sneakers",
        "x Grateful Dead SB Dunk Low Orange",
        "SB Dunk Low Mummy sneakers",
        "Air Jordan 4 Retro Taupe Haze",
        "Air Jordan 4 Retro SP Union Off Noir",
        "x Travis Scott Air Jordan 1 Low Golf",
        "Air Jordan 4 Retro Black Cat 2020",
        "Air Jordan 4 Retro Motorsports",
        "x Air Jordan 1 High OG Dusted Clay",
        "Air Jordan 1 Retro High OG Chicago",
        "Air Jordan 4 Retro Pure Money",
        "Air Jordan 4 Retro Levis NRG white denim",
        "Air Jordan 4 SB Pine Green sneakers",
        "Air Jordan 1 Retro High Off-White-UNC",
        "Off-White The 10: Air Jordan 1 Chicago",
        "Kaws Air Jordan 4 Retro sneakers"
      ];
      $array_prijzen = [
        239.99,
        979.99,
        319.99,
        279.99,
        699.99,
        9829.99,
        779.99,
        728.99,
        1375.99,
        1129.99,
        2149.99,
        959.99,
        289.99,
        2129.99,
        2878.99,
        1868.99,
        839.99,
        3429.99,
        14894.99,
        736.99
      ];
      $array_images = [
        "assets/img/pink gel nyc pink.webp",
        "assets/img/cream kale nyc.webp",
        "assets/img/pannelled.webp",
        "assets/img/smoke grey.webp",
        "assets/img/gnarhunters.webp",
        "assets/img/grateful dreads.webp",
        "assets/img/mummy dunks.webp",
        "assets/img/taupe haze.webp",
        "assets/img/unions.webp",
        "assets/img/travis golfs.webp",
        "assets/img/black cats.webp",
        "assets/img/motorsports.webp",
        "assets/img/dusted clay.webp",
        "assets/img/chicago.webp",
        "assets/img/pure moneys.webp",
        "assets/img/levi.webp",
        "assets/img/Air Jordan 4 SB Pine Green sneakers.webp",
        "assets/img/unc jordan off white.webp",
        "assets/img/chicago off white.webp",
        "assets/img/kaws.webp"
      ];
      $array_brands = [
        "Asics",
        "Asics",
        "Asics",
        "Asics",
        "Nike",
        "Nike",
        "Nike",
        "Nike Air Jordan",
        "Nike Air Jordan",
        "Nike Air Jordan",
        "Nike Air Jordan",
        "Nike",
        "Nike",
        "Nike Air Jordan",
        "Nike Air Jordan",
        "Nike Air Jordan",
        "Nike sb",
        "Nike Air Jordan",
        "Nike Air Jordan",
        "Nike Air Jordan"
      ];
      $array_sizes = [
        "36 - 38 - 42 - 43 - 45",
        "36 - 38 - 41 - 42 - 43 - 44",
        "39 - 40 - 44",
        "34 - 38 - 39 - 40 - 42 - 44",
        "40 - 44 - 47",
        "42 - 46",
        "36 - 40 - 47",
        "44 - 45 - 48 - 49",
        "39 - 40 - 41 - 44 - 46",
        "44 - 45 - 49",
        "36 - 38 - 39 - 41 - 45",
        "34 - 35 - 40 - 44",
        "40 - 41 - 50",
        "43 - 46 - 49",
        "36 - 46 - 47 - 49",
        "44 - 45 - 48 - 49",
        "40 - 44 - 47",
        "42 - 46",
        "40 - 47",
        "41 - 45 - 47 - 49"
      ];
      $array_addtocart = [
        "addToCart('Asics gel nyc cream beige pink', 239.99)",
        "addToCart('Asics gel nyc cream kale', 979.99)",
        "addToCart('Asics gel nyc panelled', 319.99)",
        "addToCart('Asics gel-NYC smoke grey', 279.99)",
        "addToCart('x Gnarhunters SB Dunk Low sneakers', 699.99)",
        "addToCart('x Grateful Dead SB Dunk Low Orange', 9829.99)",
        "addToCart('SB Dunk Low Mummy sneakers', 779.99)",
        "addToCart('Air Jordan 4 Retro Taupe Haze', 728.99)",
        "addToCart('Air Jordan 4 Retro SP Union Off Noir', 1375.99)",
        "addToCart('x Travis Scott Air Jordan 1 Low Golf', 1129.99)",
        "addToCart('Air Jordan 4 Retro Black Cat 2020', 2149.99)",
        "addToCart('Air Jordan 4 Retro Motorsports', 959.99)",
        "addToCart('x Air Jordan 1 High OG Dusted Clay', 289.99)",
        "addToCart('Air Jordan 1 Retro High OG Chicago', 2129.99)",
        "addToCart('Air Jordan 4 Retro Pure Money', 2878.99)",
        "addToCart('Air Jordan 4 Retro Levis NRG white denim', 1868.99)",
        "addToCart('Air Jordan 4 SB Pine Green sneakers', 839.99)",
        "addToCart('Air Jordan 1 Retro High Off-White-UNC', 3429.99)",
        "addToCart('Off-White The 10: Air Jordan 1 Chicago', 14894.99)",
        "addToCart('Kaws Air Jordan 4 Retro sneakers', 736.99)"
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