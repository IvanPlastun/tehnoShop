<?php
    $db = new PDO("mysql:host=localhost;dbname=tehnoshop", 'root', '');
    if (!$db) 
        die();

    session_start();

    function price_format($price) {
        return number_format($price, 0, '', ' ');
    }
?>