<?php

$title = 'login';

ob_start();?>
<div>
    <h1>Se Connecter</h1>
    
    <form action="/actions/login.php" method="POST">
        <input type="email" name="loginEmail"placeholder="Your Email">
        <input type="password" name="loginPassword" placeholder="Mot de passe">
        <button type="submit">Se Connecter</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();
