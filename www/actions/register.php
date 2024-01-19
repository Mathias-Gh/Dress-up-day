<?php

require_once __DIR__ . '/../../src/init.php';
$username_len = strlen($_POST['username']);

if(!isset($_POST['registerEmail']) || !isset($_POST['username']) || !isset($_POST['registerPassword']) || !isset($_POST['cpassword'])
|| !filter_var($_POST['registerEmail'], FILTER_VALIDATE_EMAIL) || $_POST['registerPassword'] !== $_POST['cpassword'] || $username_len < 3
|| $username_len > 12){
    
    if (!isset($_POST['registerEmail'])) {
        $_SESSION['error_message'] = "Pas d'email";
        header('Location: /?p=register');
        die();
    }

    if (!isset($_POST['username'])) {
        $_SESSION['error_message'] = "Pas de username";
        header('Location: /?p=register');
        die();
    }

    if (!isset($_POST['registerPassword'])) {
        $_SESSION['error_message'] = "Pas de password";
        header('Location: /?p=register');
        die();
    }

    if (!isset($_POST['cpassword'])) {
        set_errors("Pas de confirmation de password", 'register');
    }

    if (!filter_var($_POST['registerEmail'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = "Email incorrect";
        header('Location: /?p=register');
        die();
    }

    if ($_POST['registerPassword'] !== $_POST['cpassword']) {
        $_SESSION['error_message'] = "Les mots de passe ne correspondent pas";
        header('Location: /?p=register');
        die();
    }



    if ($username_len < 3 || $username_len > 12) {
        $_SESSION['error_message'] = "Longueur de username incorrect (doit etre entre 3 et 12)";
        header('Location: /?p=register');
        die();
    }
} else{
    $user_id = $dbMan->insert(
    'INSERT INTO  user (email, username, password, role) VALUES(?,?,?,?)',
    [$_POST['registerEmail'], $_POST['username'], hash('sha256',$_POST['registerPassword']), "CLIENT"]);
    $_SESSION['id'] = $user_id;
}


// auto connect after register


header('Location: /?p=home');