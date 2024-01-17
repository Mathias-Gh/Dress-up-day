<?php

require_once __DIR__ . '/../src/db.php';

class product {
    public function insertProduct(){
        $pdo = $db -> prepare('INSERT INTO produit(PRODUIT_NOM,PRODUIT_PRIX,PRODUIT_IMAGE,CATEGORIE_ID) VALUES(:name,:price,:image,:category)');
        $pdo -> execute([
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'category' => $category,
    ]);
    }
  

}



?>