<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cart</title>
</head>

<body>
    <section class="header">
        <div class="logo">
            <img src="../images/logo.svg" width="40px" height="auto">
            <h1 class="title">Shopping Cart</h1>
        </div>

        <div class="homepage">
            <a href="index.php">
                <img src="../images/home.svg" width="25px" height="auto">
            </a>
        </div>
    </section>
    <section class="cart">
        <?php include 'cart.php' ?>
    </section>
</body>

</html>