<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Results van mijn form:
    <?php

    // Lees GET-parameters uit de URL (gegevens die via het formulier zijn verzonden)
    $firstname = $_GET['firstname']; // Voornaam van de gebruiker
    $lastname = $_GET['lastname']; // Achternaam van de gebruiker
    $street = $_GET['street']; // Straatnaam
    $housenumber = $_GET['housenumber']; // Huisnummer
    $address = $_GET['address']; // Adres
    $country = $_GET['country']; // Land
    $email_address = $_GET['e-mail_address']; // E-mailadres
    $telephonenumber = $_GET['telephonenumber']; // Telefoonnummer
    $date_of_birth = $_GET['date_of_birth']; // Geboortedatum
    $policy = $_GET['policy']; // Beleid (bijvoorbeeld akkoord met voorwaarden)

    // Print de ontvangen GET-parameters op de pagina
    echo ("<br>firstname " . $firstname);
    echo ("<br>lastname " . $lastname);
    echo ("<br>street " . $street);
    echo ("<br>housenumber " . $housenumber);
    echo ("<br>address " . $address);
    echo ("<br>country " . $country);
    echo ("<br>e-mail_address " . $email_address);
    echo ("<br>telephonenumber " . $telephonenumber);
    echo ("<br>date_of_birth " . $date_of_birth);
    echo ("<br>policy " . $policy);

    // Databaseverbinding instellen
    $servername = "localhost"; // Servernaam (meestal localhost)
    $username = "root"; // Gebruikersnaam voor de database
    $password = ""; // Wachtwoord voor de database
    $dbname = "checkout_gegevens"; // Naam van de database

    // Maak een verbinding met de database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controleer of de verbinding succesvol is
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); // Stop script als de verbinding faalt
    }

    // SQL-query om gegevens in de database in te voegen
    $query = "INSERT INTO `persoonlijke_gegevens`( `firstname`, `lastname`, `street`, `housenumber`, `address`, `country`, `e-mail_address`, `telephonenumber`, `date_of_birth`, `policy`) 
              VALUES ('$firstname','$lastname','$street','$housenumber','$address','$country','$email_address','$telephonenumber','$date_of_birth','$policy')";

    // Voer de query uit en controleer of het succesvol is
    if ($conn->query($query) === TRUE) {
        // Als de invoer succesvol is, toon een bericht en redirect naar een bedankpagina
        echo "New record created successfully";
        echo "Redirect to new thank you page! <script>window.location.href='thanks.php';</script>";
    } else {
        // Als er een fout is, toon de foutmelding
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Sluit de databaseverbinding
    $conn->close();

    ?>
</body>

</html>
