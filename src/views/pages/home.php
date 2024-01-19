<?php
$title = 'home';
ob_start();

    // Handle file upload
    // if (isset($_FILES['fileInput']) && $_FILES['fileInput']['error'] === UPLOAD_ERR_OK) {
    //     $image = $_FILES['fileInput']['name'];
    // } else {
    //     $image = '';
    // }
?>

<div>
    PAGE HOME
    <?php
    if(isset($_SESSION['id'])){?>
        <form action="/actions/disconnect.php" method="post" class="deconnexion">
            <input type="submit" class="btn" value="Deconnexion">
        </form>
        <?php 
    }
    else{
        echo 'buhuu';
    }
    ?>

    
        
</div>
<!-- <form method="post">
    <label for="fileInput">Sélectionner l'image de l'article à ajouter :</label>
    <input type="file" id="fileInput" name="fileInput" style="display: none;">
    <button type="button" onclick="browseFile()">Chercher un fichier</button>

    <label for="name">Rentrez le nom de l'article :</label>
    <input type="text" id="name">

    <label for="prix">Rentrez le prix de l'article</label>
    <input type="text" id="prix">

    <label for="category">Rentrez la categorie de l'article</label>
    <input type="text" id="category">

    <button type="submit" onclick="insertProduct()">Validez votre article</button>
</form> -->

<?php

$page_content = ob_get_clean();


