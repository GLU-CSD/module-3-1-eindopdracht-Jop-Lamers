<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/thanks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>

    <main>
        <div class="thank-you-container">
            <h1>Thank You for Your Order!</h1>
            <p>Your order has been placed successfully. Here are the items you ordered:</p>
            <div id="order-summary" class="order-summary"></div>
            <a href="index.php" class="back-to-home">Back to Homepage</a>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        //   haal data uit mijn winkelwagen
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        // haalt de bestelling op
        const orderSummary = document.getElementById("order-summary");
        // kijkt of de winkelwagen leeg is
        if (cart.length === 0) {
            orderSummary.innerHTML = "<p>Your cart was empty. No items were ordered.</p>";
        } else {
        // genereerd de bestelling
            let orderHTML = "<ul>";
            cart.forEach(product => {
                orderHTML += `
                    <li>
                        <strong>${product.name}</strong> - $${product.price.toFixed(2)} x ${product.quantity} = $${(product.price * product.quantity).toFixed(2)}
                    </li>
                `;
            });
            orderHTML += "</ul>";
            orderSummary.innerHTML = orderHTML;
        }

// maakt mijn winkelwagen leeg
        localStorage.removeItem("cart");
    </script>
</body>

</html>