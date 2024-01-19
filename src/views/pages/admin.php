<?php

$title = 'admin';

ob_start();

?>
<div>
    
<h1>PAGE ADMIN</h1>

<form action="/actions/createProduit.php" method="POST">
    
    <input type="text" name="newProductName"  placeholder="Rentrez le nom" style="margin-top: 3vh">

    <input type="text" name="newProductPrice"  placeholder="Rentrez le prix" style="margin-top: 1vh">

    <label for="fileInput" style="margin-top: 2vh">Sélectionner l'image de l'article à ajouter :</label>
    <input type="file" id="fileInput" name="newProductImage" style="margin-top: 1vh">

    <button type="submit" style="margin-top: 4vh">Ajoutez votre article à la BDD</button>
</form>

</div>
<?php
$page_content = ob_get_clean();