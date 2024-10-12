<?php
session_start();

if (!empty($_SESSION['items']) && isset($_SESSION['items'])) {

    $totQuantity = 0;
    $totPrice = 0;

    // HTML directly within PHP block
    ?>
    <div class="labels">
        <h3>Product</h3>
        <h3>Name</h3>
        <h3>Quantity</h3>
        <h3>Price</h3>
    </div>
    <div class="cart-items">
        <?php
        foreach ($_SESSION['items'] as $item) {
            $totQuantity += $item['quantity'];
            $totPrice += $item['price'];
            ?>
            <div class="item">
                <img src="<?= $item['thumbnail']; ?>" alt="<?= $item['title']; ?>" class="item-image" width="80px"
                    height="auto" />
                <p class="item-name"><?= $item['title']; ?></p>
                <p class="item-quantity"><?= $item['quantity']; ?></p>
                <p class="item-price"><?= $item['price']; ?> €</p>
            </div>
            <?php
        }
        ?>
    </div>

    <div class="total">
        <p class="tot-quantity"><?= $totQuantity; ?></p>
        <p class="tot-price"><?= $totPrice; ?> €</p>
    </div>
    <?php
} else {
    ?>
    <h2 class="empty-cart">Your cart is empty...</h2>
    <a href="index.php"><button class="back">Go Shopping</button></a>
    <?php
}
?>