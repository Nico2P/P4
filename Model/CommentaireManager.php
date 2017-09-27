<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 15:40
 */

require_once 'Framework/Model.php';

class CommentaireManager extends Model {

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

    // Retourne le nombres de commentaires
    public function getNombreCommentaires() {
        $sql = 'select count(*) as nbCommentaires from commentaires';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();
        return $ligne['nbCommentaires'];
    }

    public function report_com($id_com) {
        $sql = 'UPDATE commentaires SET reported = TRUE WHERE id_com ='.$id_com;
        $this->executerRequete($sql);
    }
}