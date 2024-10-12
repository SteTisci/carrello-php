<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (!isset($_SESSION['items'])) {
        $_SESSION['items'] = [];
    }

    if (isset($_GET['title']) && !empty($_GET['title'])) {
        $found = false;

        // Searches if an item is already present in the session and increases its quantity
        foreach ($_SESSION['items'] as &$item) {
            if ($item['title'] == $_GET['title']) {
                $item['quantity']++;
                $found = true;
                break;
            }
        }

        // If the item is not present, add a new one to the session
        if (!$found) {
            $_SESSION['items'][] = [
                'title' => $_GET['title'],
                'price' => $_GET['price'],
                'thumbnail' => $_GET['thumbnail'],
                'quantity' => 1,
            ];
        }

        // Redirection to solve the double submit problem (PRG pattern)
        header('location: index.php');
        exit();
    }
}

