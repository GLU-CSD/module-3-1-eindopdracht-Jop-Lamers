<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <!-- Metadata en basisinformatie voor de pagina -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>

  <!-- Link naar de stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css?v=1.1" />

  <!-- Favicon en andere iconen -->
  <link rel="icon" type="image/jpeg" href="logo shoe stor.jpeg" />
  <link rel="icon" href="/favicon.ico" sizes="any" />
  <link rel="icon" href="/icon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="icon.png" />

  <!-- Open Graph metadata voor sociale media -->
  <meta name="description" content="" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:alt" content="" />

  <!-- Google Fonts preload en stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <!-- Thema kleur voor mobiele browsers -->
  <meta name="theme-color" content="#fafafa" />
</head>

<body>
  <!-- Header en navigatiebalk worden ingeladen via includes -->
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <!-- Formulier voor het afrekenen -->
  <form id="checkoutForm" action="result.php" method="get">
    <section class=" form">
      <div class="fill-in-forms">
        <h2>Fill in your details</h2>

        <!-- Geslacht selectie -->
        <label>Preposition:</label>
        <input type="radio" id="male" name="Gender" value="male" tabindex="1" checked />
        <label for="male"> Dhr. </label>
        <input type="radio" id="female" name="Gender" value="female" tabindex="2" />
        <label for="female"> Mvr. </label>
        <input type="radio" id="other" name="Gender" value="other" tabindex="3" />
        <label for="other"> Other </label><br /><br />

        <!-- Voornaam invoerveld -->
        <label>First name:</label>
        <input type="text" id="firstName" name="firstname" tabindex="4" /><br /><br />
        <div id="alertfirstName" style="color:red;"></div>

        <!-- Achternaam invoerveld -->
        <label>Last name:</label>
        <input type="text" id="lastName" name="lastname" tabindex="5" /><br /><br />
        <div id="alertlastName" style="color:red;"></div>


        <!-- Straatnaam invoerveld -->
        <label>Street:</label>
        <input type="text" id="street" name="street" tabindex="6" /><br /><br />
        <div id="alertstreet" style="color:red;"></div>


        <!-- Huisnummer invoerveld -->
        <label>Housenumber:</label>
        <input type="text" id="houseNumber" name="housenumber" tabindex="7" /><br /><br />
        <div id="alerthouseNumber" style="color:red;"></div>

        <!-- Adres invoerveld -->
        <label>Address:</label>
        <input type="text" id="address" name="address" tabindex="8" /><br /><br />
        <div id="alertaddress" style="color:red;"></div>

        <!-- E-mailadres invoerveld -->
        <label>E-mailaddress:</label>
        <input type="email" id="email" name="e-mail_address" tabindex="9" /><br /><br />
        <div id="alertemail" style="color:red;"></div>

        <!-- Telefoonnummer invoerveld -->
        <label>Telephonenumber:</label>
        <input type="tel" id="phoneNumber" name="telephonenumber" tabindex="10" /><br /><br />
        <div id="alertphoneNumber" style="color:red;"></div>

        <!-- Land selectie dropdown -->
        <label>Country:</label>
        <select id="country" name="country" tabindex="11">
          <option value="Netherlands">Netherlands</option>
          <option value="Belgium">Belgium</option>
          <option value="Germany">Germany</option>
        </select>
        <br /><br />


        <!-- Geboortedatum invoerveld -->
        <label>Date of birth:</label>
        <input type="date" id="dob" name="date_of_birth" tabindex="12" /><br /><br />
        <div id="alertdob" style="color:red;"></div>

        <!-- Checkbox voor acceptatie van de voorwaarden -->
        <input type="checkbox" id="policy" name="policy" tabindex="13" />
        <label for="policy" href="policy.php">I accept the terms and conditions</label><br /><br />
        <div id="alertpolicy" style="color:red;"></div>
      </div>

      <!-- Knop om het formulier te verzenden -->
      <input class="knop" action="result.php" type="submit" tabindex="14"></input>
    </section>
  </form>

  <!-- Footer wordt ingeladen via includes -->
  <?php include 'includes/footer.php'; ?>
</body>

<!-- JavaScript-bestand -->
<script src="assets/js/app.js"></script>

</html>