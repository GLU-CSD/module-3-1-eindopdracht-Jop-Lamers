<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $product["title"]; ?> - Details</title>
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
            $products = [
                [
                    "id" => 1,
                    "title" => "Asics gel-NYC cream beige pink",
                    "price" => 239.99,
                    "images" => ["assets/img/pink gel nyc pink.webp","assets/img2/pink gel nyc pink2.webp","assets/img3/pink gel nyc pink3.webp"],
                    "brand" => "Asics",
                    "sizes" => "36 - 38 - 42 - 43 - 45",
                    "addToCart" => "addToCart('Asics gel nyc cream beige pink', 239.99)"
                ],
                [
                    "id" => 2,
                    "title" => "Asics gel-NYC cream kale",
                    "price" => 979.99,
                    "image" => "assets/img/cream kale nyc.webp",
                    "brand" => "Asics",
                    "sizes" => "36 - 38 - 41 - 42 - 43 - 44",
                    "addToCart" => "addToCart('Asics gel nyc cream kale', 979.99)"
                ],
                [
                    "id" => 3,
                    "title" => "Asics gel-NYC panelled",
                    "price" => 319.99,
                    "image" => "assets/img/pannelled.webp",
                    "brand" => "Asics",
                    "sizes" => "39 - 40 - 44",
                    "addToCart" => "addToCart('Asics gel nyc panelled', 319.99)"
                ],
                [
                    "id" => 4,
                    "title" => "Asics gel-NYC smoke grey",
                    "price" => 279.99,
                    "image" => "assets/img/smoke grey.webp",
                    "brand" => "Asics",
                    "sizes" => "34 - 38 - 39 - 40 - 42 - 44",
                    "addToCart" => "addToCart('Asics gel-NYC smoke grey', 279.99)"
                ],
                [
                    "id" => 5,
                    "title" => "x Gnarhunters SB Dunk Low sneakers",
                    "price" => 699.99,
                    "image" => "assets/img/gnarhunters.webp",
                    "brand" => "Nike",
                    "sizes" => "40 - 44 - 47",
                    "addToCart" => "addToCart('x Gnarhunters SB Dunk Low sneakers', 699.99)"
                ],
                [
                    "id" => 6,
                    "title" => "x Grateful Dead SB Dunk Low Orange",
                    "price" => 9829.99,
                    "image" => "assets/img/grateful dreads.webp",
                    "brand" => "Nike",
                    "sizes" => "42 - 46",
                    "addToCart" => "addToCart('x Grateful Dead SB Dunk Low Orange', 9829.99)"
                ],
                [
                    "id" => 7,
                    "title" => "SB Dunk Low Mummy sneakers",
                    "price" => 779.99,
                    "image" => "assets/img/mummy dunks.webp",
                    "brand" => "Nike",
                    "sizes" => "36 - 40 - 47",
                    "addToCart" => "addToCart('SB Dunk Low Mummy sneakers', 779.99)"
                ],
                [
                    "id" => 8,
                    "title" => "Air Jordan 4 Retro Taupe Haze",
                    "price" => 728.99,
                    "image" => "assets/img/taupe haze.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "44 - 45 - 48 - 49",
                    "addToCart" => "addToCart('Air Jordan 4 Retro Taupe Haze', 728.99)"
                ],
                [
                    "id" => 9,
                    "title" => "Air Jordan 4 Retro SP Union Off Noir",
                    "price" => 1375.99,
                    "image" => "assets/img/unions.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "39 - 40 - 41 - 44 - 46",
                    "addToCart" => "addToCart('Air Jordan 4 Retro SP Union Off Noir', 1375.99)"
                ],
                [
                    "id" => 10,
                    "title" => "x Travis Scott Air Jordan 1 Low Golf",
                    "price" => 1129.99,
                    "image" => "assets/img/travis golfs.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "44 - 45 - 49",
                    "addToCart" => "addToCart('x Travis Scott Air Jordan 1 Low Golf', 1129.99)"
                ],
                [
                    "id" => 11,
                    "title" => "Air Jordan 4 Retro Black Cat 2020",
                    "price" => 2149.99,
                    "image" => "assets/img/black cats.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "36 - 38 - 39 - 41 - 45",
                    "addToCart" => "addToCart('Air Jordan 4 Retro Black Cat 2020', 2149.99)"
                ],
                [
                    "id" => 12,
                    "title" => "Air Jordan 4 Retro Motorsports",
                    "price" => 959.99,
                    "image" => "assets/img/motorsports.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "34 - 35 - 40 - 44",
                    "addToCart" => "addToCart('Air Jordan 4 Retro Motorsports', 959.99)"
                ],
                [
                    "id" => 13,
                    "title" => "x Air Jordan 1 High OG Dusted Clay",
                    "price" => 289.99,
                    "image" => "assets/img/dusted clay.webp",
                    "brand" => "Nike",
                    "sizes" => "40 - 41 - 50",
                    "addToCart" => "addToCart('x Air Jordan 1 High OG Dusted Clay', 289.99)"
                ],
                [
                    "id" => 14,
                    "title" => "Air Jordan 1 Retro High OG Chicago",
                    "price" => 2129.99,
                    "image" => "assets/img/chicago.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "43 - 46 - 49",
                    "addToCart" => "addToCart('Air Jordan 1 Retro High OG Chicago', 2129.99)"
                ],
                [
                    "id" => 15,
                    "title" => "Air Jordan 4 Retro Pure Money",
                    "price" => 2878.99,
                    "image" => "assets/img/pure moneys.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "36 - 46 - 47 - 49",
                    "addToCart" => "addToCart('Air Jordan 4 Retro Pure Money', 2878.99)"
                ],
                [
                    "id" => 16,
                    "title" => "Air Jordan 4 Retro Levis white denim",
                    "price" => 1868.99,
                    "image" => "assets/img/levi.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "44 - 45 - 48 - 49",
                    "addToCart" => "addToCart('Air Jordan 4 Retro Levis NRG white denim', 1868.99)"
                ],
                [
                    "id" => 17,
                    "title" => "Air Jordan 4 SB Pine Green sneakers",
                    "price" => 839.99,
                    "image" => "assets/img/Air Jordan 4 SB Pine Green sneakers.webp",
                    "brand" => "Nike sb",
                    "sizes" => "40 - 44 - 47",
                    "addToCart" => "addToCart('Air Jordan 4 SB Pine Green sneakers', 839.99)"
                ],
                [
                    "id" => 18,
                    "title" => "Air Jordan 1 Retro High Off-White-UNC",
                    "price" => 3429.99,
                    "image" => "assets/img/unc jordan off white.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "42 - 46",
                    "addToCart" => "addToCart('Air Jordan 1 Retro High Off-White-UNC', 3429.99)"
                ],
                [
                    "id" => 19,
                    "title" => "Off-White The 10: Air Jordan 1 Chicago",
                    "price" => 14894.99,
                    "image" => "assets/img/chicago off white.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "40 - 47",
                    "addToCart" => "addToCart('Off-White The 10: Air Jordan 1 Chicago', 14894.99)"
                ],
                [
                    "id" => 20,
                    "title" => "Kaws Air Jordan 4 Retro sneakers",
                    "price" => 736.99,
                    "image" => "assets/img/kaws.webp",
                    "brand" => "Nike Air Jordan",
                    "sizes" => "41 - 45 - 47 - 49",
                    "addToCart" => "addToCart('Kaws Air Jordan 4 Retro sneakers', 736.99)"
                ]
            ];

            foreach ($products as $product) {
                if ($_GET["id"] == $product["id"]) {
            ?>
                    <div class="product-detail">

                        <div class="product-image">
                            <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["title"]; ?>" />
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
</script>

</html>