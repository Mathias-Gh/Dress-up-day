<?php

require_once __DIR__ . '/../../src/init.php';

    if (!isset($_POST['loginEmail'])) {
        echo "Pas d'email";
        header('Location: /?p=register');
        die();
    }

    if (!isset($_POST['loginPassword'])) {
        echo "Pas de password";
        header('Location: /?p=register');
        die();
    }

    if (!filter_var($_POST['loginEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "Email incorrect";
        header('Location: /?p=register');
        die();
    }

    // to be verified
    $user = $dbMan->getBy_advanced('email',  $_POST['email'], 'User');
    if ($user !== false) {
        $validPassword = $user->verifyPassword($_POST['loginPassword']);
        if ($validPassword) {
            // all good
            $_SESSION['id'] = $user->id;
            header('Location: /?p=home');
            die();
        }
    }

header('Location: /?p=home');
// not good
// set_errors('Bad login', 'login');