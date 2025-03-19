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
      <h1 class = "filter-text">-Filters-</h1>
    
<p id = "font-adjust">-Category's-</p>
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
       
<p id = "font-adjust">- Popular Brands-</p>
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

<p id = "font-adjust">-Price adjust-</p>

<div class="slidecontainer">
  <input type="range" min="1" max="15000" value="" class="slider" id="myRange">
  <p id = price-amount>Amount: <span id="demo"></span></p>
</div>
</div>
     
        
      

      <div id="Shoes" class="product-container">
        
        <div class="shoe-container">
          <div class="shoe">
            <h3>Archive denim trucker jacket</h3>
            <img src="assets/img/supreme.webp" alt="Archive denim trucker jacket" />
            <p class="prijs">Price: -$1049,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart" onclick="addToCart('Archive denim trucker jacket', 1049.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Brim "FW 22" zip-up hoodie</h3>
            <img src="assets/img/zip hoodie supreme.webp" alt="Brim FW 22 zip-up hoodie"/>
            <p class="prijs">Price: -$574,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart" onclick="addToCart('Brim FW 22 zip-up hoodie', 574.99)">Add to cart</button>
            </div>
          </div>
          <div class="shoe">
            <h3>Andre 3000 photograph-print T-shirt</h3>
            <img
              src="assets/img/supreme shirt met man erop.webp"
              alt="Andre 3000 photograph-print T-shirt"
            />
            <p class="prijs">Price: -$327,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart" onclick="addToCart('Andre 3000 photograph-print T-shirt', 327.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>x CCM All Stars hockey jersey T-shirt</h3>
            <img
              src="assets/img/supreme jersey.webp"
              alt="x CCM All Stars hockey jersey T-shirt"
            />
            <p class="prijs">Price: -$465,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart" onclick="addToCart('x CCM All Stars hockey jersey T-shirt', 465.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Box Logo hoodie</h3>
            <img src="assets/img/beige Box Logo hoodie.webp" alt="Box Logo hoodie" />
            <p class="prijs">Price: -$529,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart" onclick="addToCart('Box Logo hoodie', 529.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Box Logo hoodie</h3>
            <img src="assets/img/box logo grijs.webp" alt="Box Logo hoodie" />
            <p class="prijs">Price: -$529,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button  class="add-to-cart" onclick="addToCart('Box Logo hoodie', 529.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Box Logo hoodie</h3>
            <img src="assets/img/box logo zwart.webp" alt="Box Logo hoodie" />
            <p class="prijs">Price: -$529,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('Box Logo hoodie', 529.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>box logo hoodie</h3>
            <img src="assets/img/box logo roze.webp" alt="box logo hoodie" />
            <p class="prijs">Price: -$529,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('box logo hoodie', 529.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Arc logo zip hoodie</h3>
            <img src="assets/img/arc logo zip hoodie.webp" alt="Arc logo zip hoodie" />
            <p class="prijs">Price: -$749,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('Arc logo zip hoodie', 749.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>x The North Face Baltoro padded jacket</h3>
            <img
              src="assets/img/x The North Face Baltoro padded jacket.webp"
              alt="x The North Face Baltoro padded jacket"
            />
            <p class="prijs">Price: -$2074,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme | The North Face</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('x The North Face Baltoro padded jacket', 2074.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Trompe L'oeil bomber jacket</h3>
            <img
              src="assets/img/Trompe L'oeil bomber jacket.webp"
              alt="Trompe L'oeil bomber jacket"
            />
            <p class="prijs">Price: -$1379.99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('Trompe Loeil bomber jacket', 1379.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>x The North Face Nuptse jacket</h3>
            <img
              src="assets/img/x The North Face Nuptse jacket.webp"
              alt="x The North Face Nuptse jacket"
            />
            <p class="prijs">Price: -$1579,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme | The North Face</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('x The North Face Nuptse jacket', 1579.99)">Add to cart</button>
            </div>
          </div>
          <div class="shoe">
            <h3>S.Matthew cotton track pants</h3>
            <img
              src="assets/img/S.Matthew cotton track pants.webp"
              alt="S.Matthew cotton track pants"
            />
            <p class="prijs">Price: -$289,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Off-White</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('S.Matthew cotton track pants', 289.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Levis Wreath-print straight-leg jeans</h3>
            <img
              src="assets/img/x Levi's Cotton Wreath-print straight-leg jeans.webp"
              alt="x Levi's Cotton Wreath-print straight-leg jeans"
            />
            <p class="prijs">Price: -$249,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Denim Tears x levi's</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('Levis Wreath-print straight-leg jeans', 249.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>x Damiano David P-Martyans sweatpants</h3>
            <img
              src="assets/img/x Damiano David P-Martyans sweatpants.webp"
              alt="x Damiano David P-Martyans sweatpants"
            />
            <p class="prijs">Price: -$287,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Diesel</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('x Damiano David P-Martyans sweatpants', 287.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>ToFF graphic-print slim-fit jeans</h3>
            <img
              src="assets/img/x ToFF graphic-print slim-fit jeans.webp"
              alt="ToFF graphic-print slim-fit jeans"
            />
            <p class="prijs">Price: -$1868,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Diesel</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('ToFF graphic-print slim-fit jeans', 1868.99)">Add to cart</button>
            </div>
          </div>
          <div class="shoe">
            <h3>logo-print drawstring sweatpants</h3>
            <img
              src="assets/img/logo-print drawstring sweatpants.webp"
              alt="logo-print drawstring sweatpants"
            />
            <p class="prijs">Price: -$680,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Palm Angels</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('logo-print drawstring sweatpants', 680.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Glory track pants</h3>
            <img src="assets/img/Glory track pants.webp" alt="Glory track pants" />
            <p class="prijs">Price: -$1074,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Who Decides War</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('Glory track pants', 1074.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>logo-print straight-leg jeans</h3>
            <img
              src="assets/img/logo-print straight-leg jeans.webp"
              alt="logo-print straight-leg jeans"
            />
            <p  class="prijs">Price: -$1346,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Heron Preston</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('logo-print straight-leg jeans', 1346.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Blown jeans</h3>
            <img src="assets/img/Blown jeans.webp" alt="Blown jeans" />
            <p class="prijs">Price: -$728,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Who Decides War</p>
              <p><strong>Sizes Available:</strong> xs - s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('Blown jeans', 728.99)">Add to cart</button>
            </div>
          </div>

       -- </div>

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