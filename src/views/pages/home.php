<?php

$title = 'home';

ob_start();?>
<div>
    PAGE HOME
    <?php

    if(isset($_SESSION['id'])){?>
    <form action="/actions/disconnect.php" method="post" class="deconnexion">
        <input type="submit" class="btn" value="Deconnexion">
    </form>
    <?php } else{
        echo 'buhuu';
    }
        ?>
        
</div>
<?php
$page_content = ob_get_clean();
