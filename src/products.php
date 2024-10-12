<?php

$data = json_decode(file_get_contents('https://dummyjson.com/products/category/mobile-accessories'), true);
$items = $data['products'];

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
?>