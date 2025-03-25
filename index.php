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

      $products = [
        [
          "id" => 1,
          "title" => "Asics gel-NYC cream beige pink",
          "price" => 239.99,
          "image" => "assets/img/pink gel nyc pink.webp",
          "brand" => "Asics",
          "sizes" => "36 - 38 - 42 - 43 - 45",
          "addToCart" => "addToCart('Asics gel nyc cream beige pink', 239.99)"
        ],
        [
          "id" => 2,
          "title" => "Asics gel-NYC cream kale",
          "price" => 979.99,
          "image" => "assets/img/cream kale nyc.webp",
          "brand" => "Asics",
          "sizes" => "36 - 38 - 41 - 42 - 43 - 44",
          "addToCart" => "addToCart('Asics gel nyc cream kale', 979.99)"
        ],
        [
          "id" => 3,
          "title" => "Asics gel-NYC panelled",
          "price" => 319.99,
          "image" => "assets/img/pannelled.webp",
          "brand" => "Asics",
          "sizes" => "39 - 40 - 44",
          "addToCart" => "addToCart('Asics gel nyc panelled', 319.99)"
        ],
        [
          "id" => 4,
          "title" => "Asics gel-NYC smoke grey",
          "price" => 279.99,
          "image" => "assets/img/smoke grey.webp",
          "brand" => "Asics",
          "sizes" => "34 - 38 - 39 - 40 - 42 - 44",
          "addToCart" => "addToCart('Asics gel-NYC smoke grey', 279.99)"
        ],
        [
          "id" => 5,
          "title" => "x Gnarhunters SB Dunk Low sneakers",
          "price" => 699.99,
          "image" => "assets/img/gnarhunters.webp",
          "brand" => "Nike",
          "sizes" => "40 - 44 - 47",
          "addToCart" => "addToCart('x Gnarhunters SB Dunk Low sneakers', 699.99)"
        ],
        [
          "id" => 6,
          "title" => "x Grateful Dead SB Dunk Low Orange",
          "price" => 9829.99,
          "image" => "assets/img/grateful dreads.webp",
          "brand" => "Nike",
          "sizes" => "42 - 46",
          "addToCart" => "addToCart('x Grateful Dead SB Dunk Low Orange', 9829.99)"
        ],
        [
          "id" => 7,
          "title" => "SB Dunk Low Mummy sneakers",
          "price" => 779.99,
          "image" => "assets/img/mummy dunks.webp",
          "brand" => "Nike",
          "sizes" => "36 - 40 - 47",
          "addToCart" => "addToCart('SB Dunk Low Mummy sneakers', 779.99)"
        ],
        [
          "id" => 8,
          "title" => "Air Jordan 4 Retro Taupe Haze",
          "price" => 728.99,
          "image" => "assets/img/taupe haze.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "44 - 45 - 48 - 49",
          "addToCart" => "addToCart('Air Jordan 4 Retro Taupe Haze', 728.99)"
        ],
        [
          "id" => 9,
          "title" => "Air Jordan 4 Retro SP Union Off Noir",
          "price" => 1375.99,
          "image" => "assets/img/unions.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "39 - 40 - 41 - 44 - 46",
          "addToCart" => "addToCart('Air Jordan 4 Retro SP Union Off Noir', 1375.99)"
        ],
        [
          "id" => 10,
          "title" => "x Travis Scott Air Jordan 1 Low Golf",
          "price" => 1129.99,
          "image" => "assets/img/travis golfs.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "44 - 45 - 49",
          "addToCart" => "addToCart('x Travis Scott Air Jordan 1 Low Golf', 1129.99)"
        ],
        [
          "id" => 11,
          "title" => "Air Jordan 4 Retro Black Cat 2020",
          "price" => 2149.99,
          "image" => "assets/img/black cats.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "36 - 38 - 39 - 41 - 45",
          "addToCart" => "addToCart('Air Jordan 4 Retro Black Cat 2020', 2149.99)"
        ],
        [
          "id" => 12,
          "title" => "Air Jordan 4 Retro Motorsports",
          "price" => 959.99,
          "image" => "assets/img/motorsports.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "34 - 35 - 40 - 44",
          "addToCart" => "addToCart('Air Jordan 4 Retro Motorsports', 959.99)"
        ],
        [
          "id" => 13,
          "title" => "x Air Jordan 1 High OG Dusted Clay",
          "price" => 289.99,
          "image" => "assets/img/dusted clay.webp",
          "brand" => "Nike",
          "sizes" => "40 - 41 - 50",
          "addToCart" => "addToCart('x Air Jordan 1 High OG Dusted Clay', 289.99)"
        ],
        [
          "id" => 14,
          "title" => "Air Jordan 1 Retro High OG Chicago",
          "price" => 2129.99,
          "image" => "assets/img/chicago.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "43 - 46 - 49",
          "addToCart" => "addToCart('Air Jordan 1 Retro High OG Chicago', 2129.99)"
        ],
        [
          "id" => 15,
          "title" => "Air Jordan 4 Retro Pure Money",
          "price" => 2878.99,
          "image" => "assets/img/pure moneys.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "36 - 46 - 47 - 49",
          "addToCart" => "addToCart('Air Jordan 4 Retro Pure Money', 2878.99)"
        ],
        [
          "id" => 16,
          "title" => "Air Jordan 4 Retro Levis white denim",
          "price" => 1868.99,
          "image" => "assets/img/levi.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "44 - 45 - 48 - 49",
          "addToCart" => "addToCart('Air Jordan 4 Retro Levis NRG white denim', 1868.99)"
        ],
        [
          "id" => 17,
          "title" => "Air Jordan 4 SB Pine Green sneakers",
          "price" => 839.99,
          "image" => "assets/img/Air Jordan 4 SB Pine Green sneakers.webp",
          "brand" => "Nike sb",
          "sizes" => "40 - 44 - 47",
          "addToCart" => "addToCart('Air Jordan 4 SB Pine Green sneakers', 839.99)"
        ],
        [
          "id" => 18,
          "title" => "Air Jordan 1 Retro High Off-White-UNC",
          "price" => 3429.99,
          "image" => "assets/img/unc jordan off white.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "42 - 46",
          "addToCart" => "addToCart('Air Jordan 1 Retro High Off-White-UNC', 3429.99)"
        ],
        [
          "id" => 19,
          "title" => "Off-White The 10: Air Jordan 1 Chicago",
          "price" => 14894.99,
          "image" => "assets/img/chicago off white.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "40 - 47",
          "addToCart" => "addToCart('Off-White The 10: Air Jordan 1 Chicago', 14894.99)"
        ],
        [
          "id" => 20,
          "title" => "Kaws Air Jordan 4 Retro sneakers",
          "price" => 736.99,
          "image" => "assets/img/kaws.webp",
          "brand" => "Nike Air Jordan",
          "sizes" => "41 - 45 - 47 - 49",
          "addToCart" => "addToCart('Kaws Air Jordan 4 Retro sneakers', 736.99)"
        ]
      ];
      ?>
      <?php foreach ($products as $product): ?>
        <div class="shoe">
          <h3><?php echo $product["title"]; ?></h3>
          <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["title"]; ?>" />
          <p class="prijs">Price: -<?php echo $product["price"]; ?>-</p>
          <div class="info">
            <p><strong>Brand name:</strong> <?php echo $product["brand"]; ?></p>
            <p><strong>Sizes Available:</strong> <?php echo $product["sizes"]; ?></p>
            <a href="detail.php ?id=<?php echo $product["id"]; ?>">View Details</a>
            <br></br>
            <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>)">Add to cart</button>
          </div>
        </div>
      <?php endforeach; ?>

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