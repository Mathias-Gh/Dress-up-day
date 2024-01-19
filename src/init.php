<?php
session_start();

require_once __DIR__ . '/db.php';

// config du site
$existing_pages = ['home', 'login', 'register', 'disconnect','admin'];

// les classes
require_once __DIR__ . '/class/User.php';

//  db manager
require_once __DIR__ . '/class/DbManager.php';
$dbMan = new DbManager($db);


// tous les utilitaires
require_once __DIR__ . '/utils/error.php';
$user = false;
if (isset($_SESSION['id'])) {
    $user = $dbMan->getById_advanced($_SESSION['id'], 'User');
}
