<?php

$data = json_decode(file_get_contents('https://dummyjson.com/products/category/mobile-accessories'), true);
$items = $data['products'];


renderItemCards($items);