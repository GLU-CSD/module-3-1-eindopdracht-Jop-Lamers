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
    <title>Thank You</title>
    <!-- Link naar de CSS-stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css?v=1.1" />
    <!-- Preconnect voor snellere laadtijd van Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts importeren -->
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Inclusie van de header -->
    <?php include 'includes/header.php'; ?>
    <!-- Inclusie van de navigatiebalk -->
    <?php include 'includes/nav.php'; ?>

    <main>
        <div class="thank-you-container">
            <!-- Bedankbericht voor de gebruiker -->
            <?php
            echo "<h1>Thank You for Your Order " . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "!</h1>";
            ?>
            <p>Your order has been placed successfully. Here are the items you ordered:</p>
            <!-- Container waar de samenvatting van de bestelling wordt weergegeven -->
            <div id="order-summary" class="order-summary"></div>
            <!-- Link om terug te keren naar de homepage -->
            <a href="index.php" class="back-to-home">Back to Homepage</a>
        </div>
    </main>

    <!-- Inclusie van de footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        // Haalt de winkelwagengegevens op uit de localStorage
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        // Selecteert het element waar de bestelling wordt weergegeven
        const orderSummary = document.getElementById("order-summary");

        // Controleert of de winkelwagen leeg is
        if (cart.length === 0) {
            // Als de winkelwagen leeg is, toon een bericht
            orderSummary.innerHTML = "<p>Your cart was empty. No items were ordered.</p>";
        } else {
            // Als de winkelwagen niet leeg is, genereer een overzicht van de bestelling
            let orderHTML = "<ul>";
            cart.forEach(product => {
                // Voeg elk product toe aan de lijst met naam, prijs, hoeveelheid en totaalprijs
                orderHTML += `
                    <li>
                        <strong>${product.name}</strong> - $${product.price.toFixed(2)} x ${product.quantity} = $${(product.price * product.quantity).toFixed(2)}
                    </li>
                `;
            });
            orderHTML += "</ul>";
            // Plaats de gegenereerde HTML in het order-summary element
            orderSummary.innerHTML = orderHTML;
        }

        // Verwijdert de winkelwagen uit de localStorage na het plaatsen van de bestelling
        localStorage.removeItem("cart");
    </script>
</body>

</html>