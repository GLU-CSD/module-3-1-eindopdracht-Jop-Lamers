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

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $street = $_POST['street'];

    //print GET parameters

    echo ("<br>firstname " . $firstname);
    echo ("<br>lastname " . $lastname);
    echo ("<br>street " . $street);

    //----------- database connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checkout gegevens";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<br><br>Connected successfully";

    //------------ insert data into database

    $sql = "INSERT INTO persoonlijke gegevens (firstname, lastname, street)
VALUES ('" . $firstname . "', '" . $lastname . "', '" . $street . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



    ?>
</body>

</html>