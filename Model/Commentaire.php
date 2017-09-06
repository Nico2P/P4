<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 15:40
 */

require_once 'Model.php';

class Commentaire extends Model {

    //Retourne les commentaires relatif à l'article choisi
    public function getCommentaire($id_art) {

        $sql = 'select id_com as id, date_com as date, auteur_com as auteur, contenu_com as contenu from commentaires where id_article=?';
        $commentaires = $this->executerRequete($sql, array($id_art));
        return $commentaires;
    }

    // Ajout un commentaire dans la bdd
    public function ajouterCommentaire($auteur, $contenu, $id_art) {
        $sql = 'insert into commentaires(date_com, auteur_com, contenu_com, id_article) values(?, ?, ?, ?)';
        $date = date(DATE_W3C); // date courante
        $this->executerRequete($sql, array($date,$auteur,$contenu,$id_art));
    }
}