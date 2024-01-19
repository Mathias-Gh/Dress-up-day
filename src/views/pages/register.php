<?php

$title = 'register';

ob_start();?>
<div>
    <h2>PAGE REGISTER</h2>
    <form action="/actions/register.php" method="POST">
        <input type="email" name="registerEmail"placeholder="Your Email">
        <input type="text" name="username" placeholder="Your username">
        <input type="password" name="registerPassword" placeholder="Mot de passe">
        <input type="password" name="cpassword"  placeholder="Confirmez votre mot de passe">
        <button type="submit">S'inscrire</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();