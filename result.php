<?php
// Start de sessie
session_start();

// Vernietig de sessie om de winkelwagen te resetten
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Results</title>
    <!-- Include your font family -->
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&display=swap" rel="stylesheet">
    <!-- Include your main stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Include header and navigation -->
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>

    <main>
        <div class="container-results">
            <h1 id=form-results>Form Results</h1>
            <div class="results">
                <?php
                // Lees GET-parameters uit de URL (gegevens die via het formulier zijn verzonden)
                $firstname = $_GET['firstname'] ?? ''; // Voornaam van de gebruiker
                $lastname = $_GET['lastname'] ?? ''; // Achternaam van de gebruiker
                $street = $_GET['street'] ?? ''; // Straatnaam
                $housenumber = $_GET['housenumber'] ?? ''; // Huisnummer
                $address = $_GET['address'] ?? ''; // Adres
                $country = $_GET['country'] ?? ''; // Land
                $email_address = $_GET['e-mail_address'] ?? ''; // E-mailadres
                $telephonenumber = $_GET['telephonenumber'] ?? ''; // Telefoonnummer
                $date_of_birth = $_GET['date_of_birth'] ?? ''; // Geboortedatum
                $policy = $_GET['policy'] ?? ''; // Beleid (bijvoorbeeld akkoord met voorwaarden)

               
                $_SESSION['firstname'] = $firstname; // Sla de voornaam op in de sessie
                $_SESSION['lastname'] = $lastname; // Sla de achternaam op in de sessie

                // Print de ontvangen GET-parameters op de pagina
                echo "<p><strong>First Name:</strong> $firstname</p>";
                echo "<p><strong>Last Name:</strong> $lastname</p>";
                echo "<p><strong>Street:</strong> $street</p>";
                echo "<p><strong>House Number:</strong> $housenumber</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                echo "<p><strong>Country:</strong> $country</p>";
                echo "<p><strong>Email Address:</strong> $email_address</p>";
                echo "<p><strong>Telephone Number:</strong> $telephonenumber</p>";
                echo "<p><strong>Date of Birth:</strong> $date_of_birth</p>";
                echo "<p><strong>Policy Accepted:</strong> " . ($policy ? "Yes" : "No") . "</p>";

                echo "<button class='finishOrderTXT' onclick=\"window.location.href='thanks.php'\">Finish order!</button>";

                // $servername = "localhost"; // Servernaam (meestal localhost)
                // $username = "root"; // Gebruikersnaam voor de database
                // $password = ""; // Wachtwoord voor de database
                // $dbname = "checkout_gegevens"; // Naam van de database



                $servername = "localhost"; // Servernaam (meestal localhost)
                $username = "u240561_webshop"; // Gebruikersnaam voor de database
                $password = "hyNbavUWWTvQAVR2MHvH"; // Wachtwoord voor de database
                $dbname = "u240561_webshop"; // Naam van de database

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
                    echo "<p class='success'>New record created successfully.</p>";
                } else {
                    echo "<p class='error'>Error: " . $query . "<br>" . $conn->error . "</p>";
                }

                // Sluit de databaseverbinding
                $conn->close();
                ?>
            </div>
        </div>
    </main>

    <!-- Include footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>