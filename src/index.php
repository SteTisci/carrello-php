<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Shopping Cart</title>

    <?php include "script.php" ?>
</head>

<body>
    <div class="wrapper">

        <section class="header">
            <div class="logo">
                <img src="../images/logo.svg" width="40px" height="auto">
                <h1 class="title">Shopping Cart</h1>
            </div>

            <div class="cart-button">
                <a href="checkout.php">
                    <img src="../images/cart.svg" width="25px" height="auto">
                    <p class="products-quantity"><?php echo count($_SESSION['items']) ?></p>
                </a>
            </div>
        </section>

        <main class="content">
            <?php include 'products.php' ?>
        </main>

    </div>
</body>

</html>