<?php

$data = json_decode(file_get_contents('https://dummyjson.com/products/category/mobile-accessories'), true);
$items = $data['products'];

foreach ($items as $item) {
    echo '<div class="product-card">';
    echo '<div class="image-container">';
    echo '<img src="' . htmlspecialchars($item['thumbnail']) . '" class="image" alt="' . htmlspecialchars($item['title']) . '" width="250px" height="250px" >';
    echo '</div>';
    echo '<div class="product-info">';
    echo '<p class="name">' . htmlspecialchars($item['title']) . '</p>';
    echo '<p class="price">' . htmlspecialchars($item['price']) . " €" . '</p>';
    echo '</div>';
    echo '<div class="submit">';
    echo '<a href="index.php?title=' . htmlspecialchars($item['title']) . '&price=' . htmlspecialchars($item['price']) . '&thumbnail=' . htmlspecialchars($item['thumbnail']) . '"><button class="add">Add to cart</button></a>';
    echo '</div>';
    echo '</div>';
}