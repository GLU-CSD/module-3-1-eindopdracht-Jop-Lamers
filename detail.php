<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Details</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/detail.css" />
    <link rel="icon" type="image/jpeg" href="logo shoe stor.jpeg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta name="description" content="" />
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>

    <div id="main">
        <div id="Shoes" class="product-container">
            <?php
            include 'includes/products.php';

            foreach ($products as $product) {
                if ($_GET["id"] == $product["id"]) {
            ?>
                    <div class="product-detail">

                        <div class="gallery">
                            <img id="large-photo" class="large-photo" src="<?php echo $product["images"][0]; ?>" alt="Grote foto">
                            <div class="thumbnails">
                                <img class="thumbnail" src="<?php echo $product["images"][0]; ?>" data-large="<?php echo $product["images"][0]; ?>" alt="Thumbnail 1">
                                <img class="thumbnail" src="<?php echo $product["images"][1]; ?>" data-large="<?php echo $product["images"][1]; ?>" alt="Thumbnail 2">
                                <img class="thumbnail" src="<?php echo $product["images"][2]; ?>" data-large="<?php echo $product["images"][2]; ?>" alt="Thumbnail 3">
                            </div>
                        </div>


                        <div class="product-info">
                            <h1><?php echo $product["title"]; ?></h1>
                            <p><strong>Price:</strong> $<?php echo number_format($product["price"], 2); ?></p>
                            <p><strong>Brand:</strong> <?php echo $product["brand"]; ?></p>
                            <p><strong>Sizes:</strong> <?php echo $product["sizes"]; ?></p>
                            <button class="add-to-cart" onclick="addToCart('<?php echo $product["title"]; ?>', <?php echo $product["price"]; ?>)">Add to cart</button>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>


</body>

<script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function addToCart(productName, productPrice) {
        const product = {
            name: productName,
            price: productPrice,
            quantity: 1
        };

        const existingProduct = cart.find(item => item.name === productName);
        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            cart.push(product);
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${productName} has been added to your cart.`);
    }


    //----------------------------------------------------------------//


    const largePhoto = document.getElementById('large-photo');
    const thumbnails = document.getElementsByClassName('thumbnail');


    for (let i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener('click', function() {

            largePhoto.src = this.getAttribute('data-large');
        });
    }
</script>

</html>