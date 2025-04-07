<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Metadata en links naar externe bronnen -->
  <meta charset="UTF-8" /> <!-- Stelt de tekenset in op UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Zorgt ervoor dat de pagina responsief is -->
  <title>Login page</title> <!-- Titel van de pagina -->
  <link rel="stylesheet" href="assets/css/login.css" /> <!-- Link naar de externe CSS-stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com" /> <!-- Optimaliseert verbinding met Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> <!-- Optimaliseert verbinding met Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap"
    rel="stylesheet" /> <!-- Importeert een specifieke Google Font -->
</head>

<body>
  <!-- Header sectie -->
  <header>
    <div id="logo">
      <!-- Logo afbeelding -->
      <img src="assets/img/logo shoe stor.jpeg" alt="Shoe store" />
      <!-- Winkelnaam -->
      <h1>~D's store~</h1>
      <!-- Beschrijving van de winkel -->
      <p>Exclusive Sneakers | Clothing | Accessoires</p>
    </div>
  </header>

  <!-- Container voor de login sectie -->
  <div id="container">
    <div class="glazen-box">
      <!-- Login titel -->
      <div class="login-box">
        <h2>Login</h2>
      </div>
      <!-- Login formulier -->
      <form action="#" method="post"> <!-- Formulier verzendt gegevens via POST -->
        <!-- Gebruikersnaam invoerveld -->
        <input
          type="text"
          name="username"
          required
          placeholder="Username" />
        <!-- Wachtwoord invoerveld -->
        <input
          type="password"
          id="password"
          name="password"
          required
          placeholder="Password" />
        <!-- Opties zoals onthoud mij en wachtwoord vergeten -->
        <div class="opties">
          <!-- Checkbox voor onthoud mij -->
          <input type="checkbox" name="remember" id="remember" />
          <label for="remember">Onthoud mij</label>
          <!-- Link voor wachtwoord vergeten -->
          <a href="#">Wachtwoord vergeten?</a>
          <!-- Inloggen knop -->
          <button type="submit">Inloggen</button>
          <!-- Registratie link -->
          <p>
            Heb je geen account?
          <nav>
            <a href="register.php" id="register">Register</a>
          </nav>
          </p>
        </div>
      </form>
    </div>
  </div>
</body>

</html>