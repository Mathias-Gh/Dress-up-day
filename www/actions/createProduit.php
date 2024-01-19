<?php

require_once __DIR__ . '/../../src/init.php';

if(!isset($_POST['newProductName']) || !isset($_POST['newProductPrice']) || !isset($_POST['newProductImage'])){
    if (!isset($_POST['newProductName'])) {
        $_SESSION['error_message'] = "Pas de nom";
        header('Location: /?p=admin');
        die();
    }
    if (!isset($_POST['newProductPrice'])) {
        $_SESSION['error_message'] = "Pas de prix";
        header('Location: /?p=admin');
        die();
    }
    if (!isset($_POST['newProductImage'])) {
        $_SESSION['error_message'] = "Pas d'image'";
        header('Location: /?p=admin');
        die();
    }
}else{
    $query = $dbMan->insert(
    'INSERT INTO  produit (PRODUIT_NOM, PRODUIT_PRIX, PRODUIT_IMAGE) VALUES(?,?,?)',
    [$_POST['newProductName'], $_POST['newProductPrice'], $_POST['newProductImage']]);
}

header('Location: /?p=admin');
?>