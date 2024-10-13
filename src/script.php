<?php

include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    // Initialize the session array if not set
    if (!isset($_SESSION['items'])) {
        $_SESSION['items'] = [];
    }

    if (isset($_GET['title']) && !empty($_GET['title'])) {
        addToCart($_SESSION['items']);

        // Redirection to solve the double submit problem (PRG pattern)
        header('location: index.php');
        exit();
    }
}

