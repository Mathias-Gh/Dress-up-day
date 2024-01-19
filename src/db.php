<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $dsn = 'mysql:host=127.0.0.1;dbname=dressUpDay;port=8889';
    $db = new PDO($dsn, 'root', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die('Impossible de se connecter à la DB.');
}

