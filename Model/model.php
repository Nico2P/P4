<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:58
 */


// TOUTES LES FONCTIONS CRUD ICI ?

abstract class model {

    //PDO accès BD
    private $bdd;

    // Exécute une requete SQL
    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // Direct
        }
        else {
            $resultat = $this->getBdd()->prepare($sql); // Préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    // Connection Bdd
    private function getBdd() {
        if ($this->bdd == null) {
            $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog_user', 'Forteroche', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }
        return $this->bdd;
    }

}
