<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 15:40
 */

require_once 'model.php';

class commentaire extends model {

    //Retourne les commentaires relatif à l'article choisi
    public function getCommentaire($id_art) {

        $sql = 'select id_com as id, date_com as date, auteur_com as auteur, contenu_com as contenu from commentaires where id_article=?';
        $commentaires = $this->executerRequete($sql, array($id_art));
        return $commentaires;
    }
}