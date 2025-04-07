<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- Metadata en links naar stylesheets -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Details</title>
    <link rel="stylesheet" href="assets/css/style.css?v1.1" />
    <link rel="icon" type="image/jpeg" href="logo shoe stor.jpeg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="description" content="" />
</head>

<body>
    <!-- Inclusie van de header -->
    <?php include 'includes/header.php'; ?>
    <!-- Inclusie van de navigatiebalk -->
    <?php include 'includes/nav.php'; ?>

    <div id="main">
        <div id="Shoes" class="product-container">
            <?php
            // Inclusie van het bestand met productgegevens
            include 'includes/products.php';

            // Loop door alle producten en zoek het product met het juiste ID
            foreach ($products as $product) {
                if ($_GET["id"] == $product["id"]) {
            ?>
                    <div class="product-detail">
                        <!-- Productafbeeldingen en galerij -->
                        <div class="gallery">
                            <!-- Grote afbeelding -->
                            <img id="large-photo" class="large-photo" src="<?php echo $product["images"][0]; ?>" alt="Grote foto">
                            <div class="thumbnails">
                                <!-- Miniaturen voor de galerij -->
                                <img class="thumbnail" src="<?php echo $product["images"][0]; ?>" data-large="<?php echo $product["images"][0]; ?>" alt="Thumbnail 1">
                                <img class="thumbnail" src="<?php echo $product["images"][1]; ?>" data-large="<?php echo $product["images"][1]; ?>" alt="Thumbnail 2">
                                <img class="thumbnail" src="<?php echo $product["images"][2]; ?>" data-large="<?php echo $product["images"][2]; ?>" alt="Thumbnail 3">
                            </div>
                        </div>

                        <!-- Productinformatie -->
                        <div class="product-info">
                            <h1><?php echo $product["title"]; ?></h1>
                            <p><strong>Price:</strong> $<?php echo number_format($product["price"], 2); ?></p>
                            <p><strong>Brand:</strong> <?php echo $product["brand"]; ?></p>
                            <p><strong>Sizes:</strong> <?php echo $product["sizes"]; ?></p>
                            <!-- Knop om product aan winkelwagen toe te voegen -->
                            <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>)">Add to cart</button>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- Inclusie van de footer -->
    <?php include 'includes/footer.php'; ?>
</body>

<script>
    // Winkelwagen ophalen uit localStorage of een lege array initialiseren
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Functie om een product aan de winkelwagen toe te voegen
    function addToCart(productName, productPrice) {
        const product = {
            name: productName,
            price: productPrice,
            quantity: 1
        };

        // Controleren of het product al in de winkelwagen zit
        const existingProduct = cart.find(item => item.name === productName);
        if (existingProduct) {
            // Als het product al bestaat, verhoog de hoeveelheid
            existingProduct.quantity += 1;
        } else {
            // Anders, voeg het product toe aan de winkelwagen
            cart.push(product);
        }

        // Winkelwagen opslaan in localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${productName} has been added to your cart.`);
    }

    //----------------------------------------------------------------//

    // Variabelen voor de grote afbeelding en miniaturen
    const largePhoto = document.getElementById('large-photo');
    const thumbnails = document.getElementsByClassName('thumbnail');

    // Eventlisteners toevoegen aan miniaturen om de grote afbeelding te wijzigen
    for (let i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener('click', function() {
            // Grote afbeelding wijzigen op basis van de geselecteerde miniatuur
            largePhoto.src = this.getAttribute('data-large');
        });
    }
</script>
<script src="assets/js/app.js"></script>
</html>