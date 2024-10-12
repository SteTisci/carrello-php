<?php
session_start();

$totQuantity = 0;
$totPrice = 0;

if (!empty($_SESSION['items']) && isset($_SESSION['items'])) {

    echo '<div class="labels">';
    echo '<h3>Product</h3>';
    echo '<h3>Name</h3>';
    echo '<h3>Quantity</h3>';
    echo '<h3>Price</h3>';
    echo '</div>';
    echo '<div class="cart-items">';

    foreach ($_SESSION['items'] as $item) {
        echo '<div class="item">';
        echo '<img src="' . $item['thumbnail'] . '" alt="' . $item['title'] . '" class="item-image" width="80px" height="auto" />';
        echo '<p class="item-name">' . $item['title'] . '</p>';
        echo '<p class="item-quantity">' . $item['quantity'] . '</p>';
        echo '<p class="item-price">' . $item['price'] . ' €</p>';
        echo '</div>';

        $totQuantity += $item['quantity'];
        $totPrice += $item['price'];
    }
    echo '</div>';

    echo '<div class="total">';
    echo '<p class="tot-quantity">' . $totQuantity . '</p>';
    echo '<p class="tot-price">' . $totPrice . ' €</p>';
    echo '</div>';

} else {
    echo '<h2 class="empty-cart">Your cart is empty...</h2>';
    echo '<a href="index.php"><button class="back">Go Shopping</button></a>';
}
