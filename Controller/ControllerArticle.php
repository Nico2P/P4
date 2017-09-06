<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 16:43
 */

require_once 'Model/Article.php';
require_once 'Model/Commentaire.php';
require_once 'View/Vue.php';

class ControllerArticle {

    private $article;
    private $commentaire;

    public function __construct(){
        $this->article = new article();
        $this->commentaire = new commentaire();
    }

    public function article($id_art) {
        $article = $this->article->getArticle($id_art);
        $commentaire = $this->commentaire->getCommentaire($id_art);
        $vue = new Vue("Article");
        $vue->generer(array("article" => $article, "commentaire" => $commentaire));
    }

    //ajoute un commentaire à l'article
    public function commenter($auteur, $contenu, $id_art) {
        // sauvegarde le commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $id_art);
        //actualisation de la page
        $this->article($id_art);
    }
}