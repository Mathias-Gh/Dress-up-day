<?php

ob_start();
if(isset($_SESSION['id'])){
    $roleInfo = $dbMan->getById2('user', $_SESSION['id'], 'string');

}
?>


<nav>
    <a href="/?p=home" id="logo"><img src="/assets/img/logoDress.png" alt="logo"></a>
    <ul>
        
        <?php

            if(isset($_SESSION['id'])){?>
                <li>
                    <form action="/actions/disconnect.php" method="post" class="deconnexion">
                        <input type="submit" class="btn" value="Se déconnecter">
                    </form>
                </li>
                <nav>
            <?php
            } 
            else{
                echo '<li><a href="/?p=register">S\'inscrire</a></li>  <li><a href="/?p=login">Se connecter</a></li>';
            }
            ?>
            <li><a href="/?p=catalogue" id="logo">catalogue</a></li>
        <?php if (isset($_SESSION['id'])):
            if($roleInfo[0] == 'ADMIN') :?>
                <li><a href="/?p=admin">Panneau d'admin</a></li>
            <?php endif;
            endif ?>
            
</ul>
</nav>
<?php
$navbar = ob_get_clean();