<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>
  <link rel="stylesheet" href="assets/css/checkout.css" />


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

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <meta name="theme-color" content="#fafafa" />
</head>

<body>

  <?php echo "Hello World"; ?>


  <header>
    <div id="balk1">
      <div class="language-selector">
        <label for="language">Language: </label>
        <select id="language" onchange="changeLanguage()">
          <option value="de">Deutsch</option>
          <option value="nl">Nederlands</option>
        </select>
      </div>
      <div id="Register">
        <a href="register.html"></a>
      </div>
      <div id="login">
        <a href="login.html">Login</a>
      </div>

      <img
        id="zoekicoon"
        src="assets/img/zoek icoon-Photoroom.png"
        alt="zoek-icoon" />
      <input type="text" name="search" placeholder="Search.." />
    </div>
    <div>
      <p>Free shipping on orders over $300</p>
      <img src="assets/img/logo shoe stor.jpeg" alt="Shoe store" />
      <h1>~D's store~</h1>
      <p>Exclusive Sneakers | Clothing | Accessoires</p>
    </div>
  </header>

  <nav style="display: flex; justify-content: space-between">
    <div id="invisblock"></div>
    <div>
      <a href="index.html">Shoes</a>
      <a href="clothing.html">Clothing</a>
      <a href="accessoires.html">Accessoires</a>
    </div>
    <div>
      <a href="shoppingcart.html">
        <img
          id="cart"
          src="assets/img/shopping cart-Photoroom.png"
          alt="Cart" />
      </a>
    </div>
  </nav>
  <form action="result.php" method="post" registerForm" onsubmit="return validateForm()">
    <section class="form">
      <label>Preposition:</label>
      <input type="radio" id="male" name="Gender" value="male" required />
      <label for="male"> Dhr. </label>
      <input type="radio" id="female" name="Gender" value="female" required />
      <label for="female"> Mvr. </label>
      <input type="radio" id="other" name="Gender" value="other" required />
      <label for="other"> Other </label><br /><br />

      <label>First name:</label>
      <input
        type="text"
        id="firstName"
        name="First name"
        required /><br /><br />

      <label>Last name:</label>
      <input
        type="text"
        id="lastName"
        name="Last name"
        required /><br /><br />

      <label>Street:</label>
      <input type="text" id="street" name="Street" required /><br /><br />

      <label>Housenumber:</label>
      <input
        type="text"
        id="houseNumber"
        name="Housenumber"
        required /><br /><br />

      <label>Address:</label>
      <input type="text" id="address" name="Address" required /><br /><br />

      <label>Country:</label>
      <input type="text" id="country" name="Country" required /><br /><br />

      <label>E-mailaddress:</label>
      <input
        type="email"
        id="email"
        name="E-mailaddress"
        required /><br /><br />

      <label>Telephonenumber:</label>
      <input
        type="tel"
        id="phoneNumber"
        name="Telefoonnumber"
        required /><br /><br />

      <label>Date of birth:</label>
      <input type="date" id="dob" name="Date of birth" required /><br /><br />

      <input type="checkbox" id="policy" name="policy" required />
      <label for="policy">I accept the policy's</label><br /><br />

      <button type="submit">Send</button>

    </section>
  </form>
</body>

</html>