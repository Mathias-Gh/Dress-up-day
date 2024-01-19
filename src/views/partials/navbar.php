<?php

ob_start();?>
<nav>
    <h1>
        Bienvenue sur dress up day 
    </h1>
    <ul>
        <li><a href="/?p=home">Accueil</a></li>
        <?php

            if(isset($_SESSION['id'])){?>
                <li>
                    <form action="/actions/disconnect.php" method="post" class="deconnexion">
                        <input type="submit" class="btn" value="Se déconnecter">
                    </form>
                </li>
            <?php 
            } 
            else{
                echo '<li><a href="/?p=register">S\'inscrire</a></li>  <li><a href="/?p=login">Se connecter</a></li>';
            }
            ?>
        
       
       
    </ul>
</nav>
<?php
$navbar = ob_get_clean();