<?php

$data = json_decode(file_get_contents('products.json'), true);
$items = $data['products']['data']['items'];


foreach ($items as $item) {
    echo '<div class="product-card">';
    echo '<img src="' . htmlspecialchars($item['url']) . '" class="image" alt="' . htmlspecialchars($item['name']) . '" width="250px" height="auto" >';
    echo '<p class="name">' . htmlspecialchars($item['name']) . '</p>';
    echo '<p class="price">€' . htmlspecialchars($item['price']) . '</p>';
    echo '<button class="add">Add to cart</button>';
    echo '</div>';
}