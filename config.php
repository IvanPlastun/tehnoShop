<?php
    $db = new PDO("mysql:host=localhost;dbname=tehnoshop", 'root', '');
    if (!$db) 
        die();

    session_start();
?>