<?php

// Function to render the items from the json file
function renderItemCards($items)
{
    foreach ($items as $item) {
        ?>
        <div class="product-card">
            <div class="image-container">
                <img src="<?= htmlspecialchars($item['thumbnail']); ?>" class="image"
                    alt="<?= htmlspecialchars($item['title']); ?>" width="250px" height="250px">
            </div>
            <div class="product-info">
                <p class="name"><?= htmlspecialchars($item['title']); ?></p>
                <p class="price"><?= htmlspecialchars($item['price']); ?> €</p>
            </div>
            <div class="submit">
                <a
                    href="index.php?title=<?= urlencode($item['title']); ?>&price=<?= urlencode($item['price']); ?>&thumbnail=<?= urlencode($item['thumbnail']); ?>">
                    <button class="add">Add to cart</button>
                </a>
            </div>
        </div>
        <?php
    }
}

// Adds an item in the current session array
function addToCart(&$items)
{
    $found = false;

    // Searches if an item is already present in the array and increases its quantity
    foreach ($items as &$item) {
        if ($item['title'] == $_GET['title']) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }
    // If the item is not present, add a new one to the array
    if (!$found) {
        $items[] = [
            'title' => $_GET['title'],
            'price' => $_GET['price'],
            'thumbnail' => $_GET['thumbnail'],
            'quantity' => 1,
        ];
    }
}

// Function to calculate the total quantity and price of the cart items
function calculateTotals($items)
{
    $totals = ['quantity' => 0, 'price' => 0];

    foreach ($items as $item) {
        $totals['quantity'] += $item['quantity'];
        $totals['price'] += $item['price'];
    }
    return $totals;
}

// Function to generate the cart items
function renderCartItems($items)
{

    foreach ($items as $item) {
        ?>
        <div class="item">
            <img src="<?= $item['thumbnail']; ?>" alt="<?= $item['title']; ?>" class="item-image" width="80px" height="auto" />
            <p class="item-name"><?= $item['title']; ?></p>
            <p class="item-quantity"><?= $item['quantity']; ?></p>
            <p class="item-price"><?= $item['price']; ?> €</p>
        </div>
        <?php
    }
}

// Function to show the empty cart
function renderEmptyCart()
{
    ?>
    <h2 class="empty-cart">Your cart is empty...</h2>
    <a href="index.php"><button class="back">Go Shopping</button></a>
    <?php
}