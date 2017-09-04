<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 16:43
 */

require_once 'Model/article.php';
require_once 'Model/commentaire.php';
require_once 'View/Vue.php';

class controllerArticle {

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
}