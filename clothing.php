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
           "title" => "Archive denim trucker jacket",
           "price" => 1049.99,
           "image" => "assets/img/supreme.webp",
           "brand" => "Supreme",
           "sizes" => "xs - s - m - l - xl"
         ],
         [
           "title" => "Brim FW 22 zip-up hoodie",
           "price" => 574.99,
           "image" => "assets/img/zip hoodie supreme.webp",
           "brand" => "Supreme",
           "sizes" => "xs - s - m - l - xl"
         ],
          [
            "title" => "Andre 3000 photograph-print T-shirt",
            "price" => 327.99,
            "image" => "assets/img/supreme shirt met man erop.webp",
            "brand" => "Supreme",
            "sizes" => "xs - s - m - l - xl"
          ],
       [
        "title" => "x CCM All Stars hockey jersey T-shirt",
        "price" => 465.99,
        "image" => "assets/img/supreme jersey.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Box Logo hoodie",
        "price" => 529.99,
        "image" => "assets/img/beige Box Logo hoodie.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Box Logo hoodie",
        "price" => 529.99,
        "image" => "assets/img/box logo grijs.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Box Logo hoodie",
        "price" => 529.99,
        "image" => "assets/img/box logo zwart.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "box logo hoodie",
        "price" => 529.99,
        "image" => "assets/img/box logo roze.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Arc logo zip hoodie",
        "price" => 749.99,
        "image" => "assets/img/arc logo zip hoodie.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "x The North Face Baltoro padded jacket",
        "price" => 2074.99,
        "image" => "assets/img/x The North Face Baltoro padded jacket.webp",
        "brand" => "Supreme | The North Face",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Trompe L'oeil bomber jacket",
        "price" => 1379.99,
        "image" => "assets/img/Trompe L'oeil bomber jacket.webp",
        "brand" => "Supreme",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "x The North Face Nuptse jacket",
        "price" => 1579.99,
        "image" => "assets/img/x The North Face Nuptse jacket.webp",
        "brand" => "Supreme | The North Face",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "S.Matthew cotton track pants",
        "price" => 289.99,
        "image" => "assets/img/S.Matthew cotton track pants.webp",
        "brand" => "Off-White",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Levis Wreath-print straight-leg jeans",
        "price" => 249.99,
        "image" => "assets/img/x Levi's Cotton Wreath-print straight-leg jeans.webp",
        "brand" => "Denim Tears x levi's",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "x Damiano David P-Martyans sweatpants",
        "price" => 287.99,
        "image" => "assets/img/x Damiano David P-Martyans sweatpants.webp",
        "brand" => "Diesel",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "ToFF graphic-print slim-fit jeans",
        "price" => 1868.99,
        "image" => "assets/img/x ToFF graphic-print slim-fit jeans.webp",
        "brand" => "Diesel",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "logo-print drawstring sweatpants",
        "price" => 680.99,
        "image" => "assets/img/logo-print drawstring sweatpants.webp",
        "brand" => "Palm Angels",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Glory track pants",
        "price" => 1074.99,
        "image" => "assets/img/Glory track pants.webp",
        "brand" => "Who Decides War",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "logo-print straight-leg jeans",
        "price" => 1346.99,
        "image" => "assets/img/logo-print straight-leg jeans.webp",
        "brand" => "Heron Preston",
        "sizes" => "xs - s - m - l - xl"
      ],
      [
        "title" => "Blown jeans",
        "price" => 728.99,
        "image" => "assets/img/Blown jeans.webp",
        "brand" => "Who Decides War",
        "sizes" => "xs - s - m - l - xl"
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