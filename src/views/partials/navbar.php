<?php

ob_start();

$roleInfo = $dbMan->getById2('user', 2, 'string');
var_dump($roleInfo[0]);
?>


<ul>
    <li><a href="/?p=register">Go to Register</a></li>
    <li><a href="/?p=login">Go to login</a></li>
    <li><a href="/?p=home">Go to home</a></li>
    <?php if ($roleInfo[0] == 'ADMIN') :?>
        <li><a href="/?p=admin">Panneau d'admin</a></li>
    <?php endif ?>
</ul>
<?php
$navbar = ob_get_clean();
