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
    echo '<button class="add">Add to cart</button>';
    echo '</div>';
}