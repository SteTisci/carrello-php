<?php
session_start();
include 'functions.php';


// Checks if the cart isn't empty
if (!empty($_SESSION['items']) && isset($_SESSION['items'])) {

    $totals = calculateTotals($_SESSION['items']);
    ?>
    <div class="labels">
        <h3>Product</h3>
        <h3>Name</h3>
        <h3>Quantity</h3>
        <h3>Price</h3>
    </div>
    <div class="cart-items">
        <?php renderCartItems($_SESSION['items']); ?>
    </div>

    <div class="total">
        <p class="tot-quantity"><?= $totals['quantity']; ?></p>
        <p class="tot-price"><?= $totals['price']; ?> €</p>
    </div>
    <?php
} else {
    renderEmptyCart();
}
?>