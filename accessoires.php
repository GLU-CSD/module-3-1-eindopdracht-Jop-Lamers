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
          <input type="checkbox" >
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
            <h3>1DR logo-buckle leather belt</h3>
            <img
              src="assets/img/diesel riem.webp"
              alt="1DR logo-buckle leather belt"
            />
            <p class="prijs">Price: -$189,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Diesel</p>
              <p><strong>Sizes Available:</strong> 90 - 100 - 110</p>
              <button class="add-to-cart"onclick="addToCart('1DR logo-buckle leather belt', 189.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>C-Braff distressed-effect cap</h3>
            <img
              src="assets/img/diesel cap effect.webp"
              alt="C-Braff distressed-effect cap"
            />
            <p class="prijs">Price: -$89,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Diesel</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('C-Braff distressed-effect cap', 89.99)">Add to cart</button>
            </div>
          </div>
          <div class="shoe">
            <h3>logo-print passport wallet</h3>
            <img
              src="assets/img/logo-print passport wallet.webp"
              alt="logo-print passport wallet"
            />
            <p class="prijs">Price: -$919,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Balenciaga</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('logo-print passport wallet', 919.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>GG1244S mask-frame sunglasses</h3>
            <img
              src="assets/img/gucci eyewear.webp"
              alt="GG1244S mask-frame sunglasses"
            />
            <p class="prijs">Price: -$1479,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Gucci</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('GG1244S mask-frame sunglasses', 1479.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>check cashmere scarf</h3>
            <img
              src="assets/img/burberry sjaal.webp"
              alt="check cashmere scarf"
            />
            <p class="prijs">Price: -$739,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Burberry</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('check cashmere scarf', 739.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>x New Era® box logo beanie</h3>

            <img
              src="assets/img/new era supreme.webp"
              alt="x New Era® box logo beanie"
            />
            <p class="prijs">Price: -$139,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme x New era</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('x New Era® box logo beanie', 139.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>GG Supreme leather belt</h3>
            <img
              src="assets/img/gucci riem.webp"
              alt="GG Supreme leather belt"
            />
            <p class="prijs">Price: -$779,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Gucci</p>
              <p><strong>Sizes Available:</strong> 90 - 110</p>
              <button class="add-to-cart"onclick="addToCart('GG Supreme leather belt', 779.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>dog vest</h3>
            <img src="assets/img/mocler dog veste.webp" alt="dog vest" />
            <p class="prijs">Price: -$624,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Moncler x Poldo</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('dog vest', 624.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>SL572 square-frame tinted sunglasses</h3>
            <img
              src="assets/img/SL572 square-frame tinted sunglasses.webp"
              alt="SL572 square-frame tinted sunglasses"
            />
            <p class="prijs">Price: -$455,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Saint-Laurent Eyewear</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('SL572 square-frame tinted sunglasses', 455.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Arrow belt</h3>
            <img src="assets/img/arrow belt.webp" alt="Arrow belt" />
            <p class="prijs">Price: -$374,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Off-White</p>
              <p><strong>Sizes Available:</strong> 110 - 120</p>
              <button class="add-to-cart"onclick="addToCart('Arrow belt', 374.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Off Currency wallet</h3>
            <img src="assets/img/off wallet.webp" alt="Off Currency wallet" />
            <p class="prijs">Price: -$239,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Off-White</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('Off Currency wallet', 239.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Military Camp FW 23 baseball cap</h3>
            <img
              src="assets/img/Military Camp FW 23 baseball cap.webp"
              alt="Military Camp FW 23 baseball cap"
            />
            <p class="prijs">Price: -$219,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('Military Camp FW 23 baseball cap', 219.99)">Add to cart</button>
            </div>
          </div>
          <div class="shoe">
            <h3>Symbole rectangle-frame sunglasses</h3>
            <img
              src="assets/img/Symbole rectangle-frame sunglasses.webp"
              alt="Symbole rectangle-frame sunglasses"
            />
            <p class="prijs">Price: -$269,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Prada</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('Symbole rectangle-frame sunglasses', 269.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>abstract-print iPhone 14 Plus case</h3>
            <img
              src="assets/img/abstract-print iPhone 14 Plus case.webp"
              alt="abstract-print iPhone 14 Plus case"
            />
            <p class="prijs">Price: -$129,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> BAPE</p>
              <p><strong>Sizes Available:</strong> iphone 14 plus</p>
              <button class="add-to-cart"onclick="addToCart('abstract-print iPhone 14 Plus case', 129.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>mask-shaped sunglasses</h3>
            <img
              src="assets/img/mask-shaped sunglasses.webp"
              alt="mask-shaped sunglasses"
            />
            <p class="prijs">Price: -$478,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Guccie</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('mask-shaped sunglasses', 478.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Orb buckle belt</h3>
            <img src="assets/img/Orb buckle belt.webp" alt="Orb buckle belt" />
            <p class="prijs">Price: -$368,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Vivienne Westwood</p>
              <p><strong>Sizes Available:</strong> 110 - 120</p>
              <button class="add-to-cart"onclick="addToCart('Orb buckle belt', 368.99)">Add to cart</button>
            </div>
          </div>
          <div class="shoe">
            <h3>x Ducati x Spidi C1 racing gloves</h3>
            <img
              src="assets/img/supreme gloves.webp"
              alt="x Ducati x Spidi C1 racing gloves"
            />
            <p class="prijs">Price: -$699,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> s - m - l - xl</p>
              <button class="add-to-cart"onclick="addToCart('x Ducati x Spidi C1 racing gloves', 699.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>Catalina square-frame sunglasses</h3>
            <img
              src="assets/img/Catalina square-frame sunglasses.webp"
              alt="Catalina square-frame sunglasses"
            />
            <p class="prijs">Price: -$444,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Off-White</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('Catalina square-frame sunglasses', 444.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>logo-stamp baseball cap</h3>
            <img
              src="assets/img/logo-stamp baseball cap.webp"
              alt="logo-stamp baseball cap"
            />
            <p class="prijs">Price: -$329,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Acne studios</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('logo-stamp baseball cap', 329.99)">Add to cart</button>
            </div>
          </div>

          <div class="shoe">
            <h3>intarsia-logo beanie hat</h3>
            <img
              src="assets/img/intarsia-logo beanie hat.webp"
              alt="intarsia-logo beanie hat"
            />
            <p class="prijs">Price: -$228,99-</p>
            <div class="info">
              <p><strong>Brand name:</strong> Supreme</p>
              <p><strong>Sizes Available:</strong> One size</p>
              <button class="add-to-cart"onclick="addToCart('intarsia-logo beanie hat', 228.99)">Add to cart</button>
            </div>
          </div>
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