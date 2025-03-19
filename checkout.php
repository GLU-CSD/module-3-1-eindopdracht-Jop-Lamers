<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>D's shoe store</title>
  <link rel="stylesheet" href="assets/css/checkout.css" />
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

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <meta name="theme-color" content="#fafafa" />
</head>

<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

  <form action="result.php" method="get">
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
        name="firstname"

        required /><br /><br />

      <label>Last name:</label>
      <input
        type="text"
        id="lastName"
        name="lastname"

        required /><br /><br />

      <label>Street:</label>
      <input type="text" id="street" name="street" required /><br /><br />

      <label>Housenumber:</label>
      <input
        type="text"
        id="houseNumber"
        name="housenumber"

        required /><br /><br />

      <label>Address:</label>
      <input type="text" id="address" name="address" required /><br /><br />

      <label>Country:</label>
      <input type="text" id="country" name="country" required /><br /><br />

      <label>E-mailaddress:</label>
      <input
        type="email"
        id="email"
        name="e-mail_address"

        required /><br /><br />

      <label>Telephonenumber:</label>
      <input
        type="tel"
        id="phoneNumber"
        name="telephonenumber"

        required /><br /><br />

      <label>Date of birth:</label>
      <input type="date" id="dob" name="date_of_birth" required /><br /><br />

      <input type="checkbox" id="policy" name="policy" required />
      <label for="policy">I accept the policy's</label><br /><br />

      <button type="submit">Send</button>

    </section>
  </form>
  <?php include 'includes/footer.php'; ?>
</body>

</html>