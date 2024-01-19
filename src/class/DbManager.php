<?php


/**
 * La classe DbManager doit pouvoir gérer n'importe quelle table de votre base de donnée
 *
 * Complétez les fonctions suivantes pour les faires fonctionner
 */

class DbManager {
    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    // return l'id inseré
    function insert(string $sql, array $data) {
        $sth = $this->db->prepare($sql);
        $sth->execute($data);
        return $this->db->lastInsertId();
    }

    function select(string $sql, array $data, string $className) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetchAll();
        return $resultat;
    }

    function getById(string $tableName, $id, string $className) {
        $req = $this->db->prepare('SELECT * FROM '.$tableName.' WHERE id = ?');
        $req->execute([$id]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
        return $resultat;
    }

    function getById2(string $tableName, $id, string $className) {
        $req = $this->db->prepare('SELECT role FROM '.$tableName.' WHERE id = ?');
        $req->execute([$id]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
        return $resultat;
    }

    function getById3(string $tableName, $id, string $className) {
        $req = $this->db->prepare('SELECT PRODUIT_IMAGE FROM '.$tableName.' WHERE id = ?');
        $req->execute([$id]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
    
        return $resultat;
    }

    function getById_advanced($id, string $className) {
        $tableName = strtolower($className);
        return $this->getById($tableName, $id, $className);
    }

    function getBy(string $tableName, string $column, $value, string $className) {
        $req = $this->db->prepare('SELECT * FROM '.$tableName.' WHERE '.$column.' = ?');
        $req->execute([$value]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
        return $resultat;
    }

    function getBy_advanced(string $column, $value, string $className) {
        $tableName = strtolower($className);
        return $this->getBy($tableName, $column, $value, $className);
    }

    function removeById(string $tableName, $id) {
        $req = $this->db->prepare('DELETE FROM '.$tableName.' WHERE id=?');
        $req->execute([$id]);
    }
 
    function update(string $tableName, array $data) {
        $sql = 'UPDATE '.$tableName.' SET ';
        foreach($data as $clef => $value){
            if ($clef != 'id'){
                $sql = $sql.$clef.'=:'.$clef.', ';
            }
        }
        $sql = substr($sql,0,-2);
        $req = $this->db->prepare($sql.' WHERE id=:id');
        $req->execute($data);
    }
}