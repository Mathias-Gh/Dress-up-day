<?php

require_once __DIR__ . '/../db.php';

class Product {
    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertProduct($name, $price, $image, $category) {
        $pdo = $this->db->prepare('INSERT INTO produit(PRODUIT_NOM, PRODUIT_PRIX, PRODUIT_IMAGE, CATEGORIE_ID) VALUES(:name, :price, :image, :category)');
        $pdo->execute([
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'category' => $category,
        ]);
    }
}

// Utilisation de la classe


?>