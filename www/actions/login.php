<?php

require_once __DIR__ . '/../../src/init.php';

    if (empty($_POST['loginEmail'])) {
        $_SESSION['error_message'] = "Pas d'email";
        header('Location: /?p=login');
        die();
    }

    if (empty($_POST['loginPassword'])) {
        $_SESSION['error_message'] = "Pas de mot de passe";
        header('Location: /?p=login');
        die();
    }

    if (!filter_var($_POST['loginEmail'], FILTER_VALIDATE_EMAIL)) {
        echo "Email incorrect";
        header('Location: /?p=login');
        die();
    }

    // to be verified
    $user = $dbMan->getBy_advanced('email',  $_POST['loginEmail'], 'User');

    if ($user !== false) {
        $validPassword = $user->verifyPassword($_POST['loginPassword']);

        if ($validPassword) {
    
            // all good
            $_SESSION['id'] = $user->id;
            var_dump($user);
            header('Location: /?p=home');
            die();
        }
    }

header('Location: /?p=home');

set_errors('Bad login', 'login');