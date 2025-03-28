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

    //read GET parameters

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $street = $_GET['street'];
    $housenumber = $_GET['housenumber'];
    $address = $_GET['address'];
    $country = $_GET['country'];
    $email_address = $_GET['e-mail_address'];
    $telephonenumber = $_GET['telephonenumber'];
    $date_of_birth = $_GET['date_of_birth'];
    $policy = $_GET['policy'];

    //print GET parameters

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
    // echo ("<br>housenumber " . $housenumber);

    //----------- database connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checkout_gegevens";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // echo "<br><br>Connected successfully";

    //------------ insert data into database

    $query = "INSERT INTO `persoonlijke_gegevens`( `firstname`, `lastname`, `street`, `housenumber`, `address`, `country`, `e-mail_address`, `telephonenumber`, `date_of_birth`, `policy`) VALUES ('$firstname','$lastname','$street','$housenumber','$address','$country','$email_address','$telephonenumber','$date_of_birth','$policy')";


    //     $sql = "INSERT INTO persoonlijke_gegevens (firstname, lastname, street)
    // VALUES ('" . $firstname . "' '" . $lastname . "' '" . $street . "')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
        echo "Redirect to new thank you page! <script>window.location.href='thanks.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



    ?>
</body>

</html>