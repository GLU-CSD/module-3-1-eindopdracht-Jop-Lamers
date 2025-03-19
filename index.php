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

      <div class="shoe-container">
        <div class="shoe">
          <h3>Asics gel nyc cream beige pink</h3>
          <img
            src="assets/img/pink gel nyc pink.webp"
            alt="Asics gel nyc cream mineral beige pink" />
          <p class="prijs">Price: -$239,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Asics</p>
            <p><strong>Sizes Available:</strong> 36 - 38 - 42 - 43 - 45</p>
            <button class="add-to-cart" onclick="addToCart('Asics gel nyc cream beige pink', 239.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Asics gel nyc cream kale</h3>
          <img
            src="assets/img/cream kale nyc.webp"
            alt="Asics gel nyc cream kale" />
          <p class="prijs">Price: -$979,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Asics</p>
            <p>
              <strong>Sizes Available:</strong> 36 - 38 - 41 - 42 - 43 - 44
            </p>
            <button class="add-to-cart" onclick="addToCart('Asics gel nyc cream kale', 979.99)">Add to cart</button>
          </div>
        </div>
        <div class="shoe">
          <h3>Asics gel nyc panelled</h3>
          <img src="assets/img/pannelled.webp" alt="Asics gel nyc panelled" />
          <p class="prijs">Price: -$319,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Asics</p>
            <p><strong>Sizes Available:</strong> 39 - 40 - 44</p>
            <button class="add-to-cart" onclick="addToCart('Asics gel nyc panelled', 319.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Asics gel-NYC smoke grey</h3>
          <img
            src="assets/img/smoke grey.webp"
            alt="Asics gel-NYC smoke grey" />
          <p class="prijs">Price: -$279,99-</p>
          <div class="info">
            <p class="prijs"><strong>Brand name:</strong> Asics</p>
            <p>
              <strong>Sizes Available:</strong> 34 - 38 - 39 - 40 - 42 - 44
            </p>
            <button class="add-to-cart" onclick="addToCart('Asics gel-NYC smoke grey', 279.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>x Gnarhunters SB Dunk Low sneakers</h3>
          <img
            src="assets/img/gnarhunters.webp"
            alt="x Gnarhunters SB Dunk Low sneakers" />
          <p class="prijs">Price: -$699,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike</p>
            <p><strong>Sizes Available:</strong> 40 - 44 - 47</p>
            <button class="add-to-cart" onclick="addToCart('x Gnarhunters SB Dunk Low sneakers', 699.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>x Grateful Dead SB Dunk Low "Orange"</h3>
          <img
            src="assets/img/grateful dreads.webp"
            alt="x Grateful Dead SB Dunk Low Orange" />
          <p class="prijs">Price: -$9829,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike</p>
            <p><strong>Sizes Available:</strong> 42 - 46</p>
            <button class="add-to-cart" onclick="addToCart('x Grateful Dead SB Dunk Low Orange', 9829.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>SB Dunk Low "Mummy" sneakers</h3>
          <img
            src="assets/img/mummy dunks.webp"
            alt="SB Dunk Low Mummy sneakers" />
          <p class="prijs">Price: -$779,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike</p>
            <p><strong>Sizes Available:</strong> 36 - 40 - 47</p>
            <button class="add-to-cart" onclick="addToCart('SB Dunk Low Mummy sneakers', 779.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 4 Retro "Taupe Haze"</h3>
          <img
            src="assets/img/taupe haze.webp"
            alt="Air Jordan 4 Retro Taupe Haze" />
          <p class="prijs">Price: -$728,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 44 - 45 - 48 - 49</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 Retro Taupe Haze', 728.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 4 Retro SP "Union Off Noir"</h3>
          <img
            src="assets/img/unions.webp"
            alt="Air Jordan 4 Retro SP Union Off Noir" />
          <p class="prijs">Price: -$1375,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 39 - 40 - 41 - 44 - 46</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 Retro SP Union Off Noir', 1375.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>x Travis Scott Air Jordan 1 Low Golf</h3>
          <img
            src="assets/img/travis golfs.webp"
            alt="x Travis Scott Air Jordan 1 Low Golf" />
          <p class="prijs">Price: -$1129.99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 44 - 45 - 49</p>
            <button class="add-to-cart" onclick="addToCart('x Travis Scott Air Jordan 1 Low Golf', 1129.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 4 Retro Black Cat 2020</h3>
          <img
            src="assets/img/black cats.webp"
            alt="Air Jordan 4 Retro Black Cat 2020" />
          <p class="prijs">Price: -$2149,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 36 - 38 - 39 - 41 - 45</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 Retro Black Cat 2020', 2149.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 4 Retro "Motorsports"</h3>
          <img
            src="assets/img/motorsports.webp"
            alt="Air Jordan 4 Retro Motorsports" />
          <p class="prijs">Price: -$959,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 34 - 35 - 40 - 44</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 Retro Motorsports', 959.99)">Add to cart</button>
          </div>
        </div>
        <div class="shoe">
          <h3>x Air Jordan 1 High OG "Dusted Clay"</h3>
          <img
            src="assets/img/dusted clay.webp"
            alt="Air Jordan 1 High OG Dusted Clay" />
          <p class="prijs">Price: -$289,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike</p>
            <p><strong>Sizes Available:</strong> 40 - 41 - 50</p>
            <button class="add-to-cart" onclick="addToCart('x Air Jordan 1 High OG Dusted Clay', 289.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 1 Retro High OG "Chicago"</h3>
          <img
            src="assets/img/chicago.webp"
            alt="Air Jordan 1 Retro High OG Chicago" />
          <p class="prijs">Price: -$2129,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 43 - 46 - 49</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 1 Retro High OG Chicago', 2129.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 4 Retro "Pure Money"</h3>
          <img
            src="assets/img/pure moneys.webp"
            alt="Air Jordan 4 Retro Pure Money" />
          <p class="prijs">Price: -$2878,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 36 - 46 - 47 - 49</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 Retro Pure Money', 2878.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 4 Retro Levis NRG white denim</h3>
          <img
            src="assets/img/levi.webp"
            alt="Air Jordan 4 Retro Levis NRG white denim" />
          <p class="prijs">Price: -$1868,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 44 - 45 - 48 - 49</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 Retro Levis NRG white denim', 1868.99)">Add to cart</button>
          </div>
        </div>
        <div class="shoe">
          <h3>Air Jordan 4 SB Pine Green sneakers</h3>
          <img
            src="assets/img/Air Jordan 4 SB Pine Green sneakers.webp"
            alt="Air Jordan 4 SB Pine Green sneakers" />
          <p class="prijs">Price: -$839,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike sb</p>
            <p><strong>Sizes Available:</strong> 40 - 44 - 47</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 4 SB Pine Green sneakers', 839.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Air Jordan 1 Retro High "Off-White-UNC"</h3>
          <img
            src="assets/img/unc jordan off white.webp"
            alt="Air Jordan 1 Retro High Off-White-UNC" />
          <p class="prijs">Price: -$3429,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 42 - 46</p>
            <button class="add-to-cart" onclick="addToCart('Air Jordan 1 Retro High Off-White-UNC', 3429.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Off-White The 10: Air Jordan 1 "Chicago"</h3>
          <img
            src="assets/img/chicago off white.webp"
            alt="Off-White The 10: Air Jordan 1 Chicago sneakers" />
          <p class="prijs">Price: -$14894,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 40 - 47</p>
            <button class="add-to-cart" onclick="addToCart('Off-White The 10: Air Jordan 1 Chicago', 14894.99)">Add to cart</button>
          </div>
        </div>

        <div class="shoe">
          <h3>Kaws Air Jordan 4 Retro sneakers</h3>
          <img
            src="assets/img/kaws.webp"
            alt=" Kaws Air Jordan 4 Retro sneakers" />
          <p class="prijs">Price: -$736,99-</p>
          <div class="info">
            <p><strong>Brand name:</strong> Nike Air Jordan</p>
            <p><strong>Sizes Available:</strong> 41 - 45 - 47 - 49</p>
            <button class="add-to-cart" onclick="addToCart('Kaws Air Jordan 4 Retro sneakers', 736.99)">Add to cart</button>
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