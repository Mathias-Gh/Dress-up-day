<?php

$title = 'login';

ob_start();?>
<div>
    <h2>Se Connecter</h2>
    <?php require_once __DIR__ . '/../partials/show_error.php' ?>
    <form action="/actions/login.php" method="POST">
        <input type="email" name="loginEmail"placeholder="Your Email">
        <input type="password" name="loginPassword" placeholder="Mot de passe">
        <button type="submit">Se Connecter</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();
