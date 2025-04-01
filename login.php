<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login page</title>
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap"
    rel="stylesheet" />
</head>

<body>
  <header>
    <div id="logo">
      <img src="assets/img/logo shoe stor.jpeg" alt="Shoe store" />
      <h1>~D's store~</h1>
      <p>Exclusive Sneakers | Clothing | Accessoires</p>
    </div>
  </header>
  <div id="container">
    <div class="glazen-box">
      <div class="login-box">
        <h2>Login</h2>
      </div>
      <form action="#" method="post">
        <input
          type="text"
          name="username"
          name="username"
          required
          placeholder="Username" />
        <input
          type="password"
          id="password"
          name="password"
          required
          placeholder="Password" />
        <div class="opties">
          <input type="checkbox" name="remember" id="remember" />
          <label for="remember">Onthoud mij</label>
          <a href="#">Wachtwoord vergeten?</a>
          <button type="Inloggen">Inloggen</button>
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