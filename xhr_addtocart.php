<?php
// Start een nieuwe of hervat een bestaande sessie
session_start();

// Decodeer de JSON-string die via een POST-verzoek is verzonden naar een PHP-array
$product = json_decode($_POST['product'], true);

// Controleer of de 'cart' (winkelwagen) al bestaat in de sessie
if (isset($_SESSION['cart'])) {
    // Voeg het nieuwe product toe aan de bestaande winkelwagen
    $_SESSION['cart'][] = $product;
} else {
    // Als de winkelwagen nog niet bestaat, maak een nieuwe array met het product
    $_SESSION['cart'] = array($product);
}

// Opmerking: De var_dump-statements zijn uitgecommentarieerd, maar kunnen worden gebruikt voor debugging
// var_dump($_POST['product']); // Toont de ontvangen productgegevens
// var_dump($_SESSION); // Toont de huidige sessie-inhoud, inclusief de winkelwagen
