<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 16:43
 */

require_once 'Model/index.php';
require_once 'Model/Commentaire.php';
require_once 'Framework/Vue.php';

class ControlerArticle {

    private $article;
    private $commentaire;

    public function __construct(){
        $this->article = new article();
        $this->commentaire = new commentaire();
    }

    public function index() {
        $id_art = $this->requete->getParametre("id");
        $article = $this->article->getArticle($id_art);
        $commentaires = $this->commentaire->getCommentaire($id_art);
        $this->genererVue(array('article' => $article, 'commentaires' => $commentaires));
    }

    //ajoute un commentaire à l'article
    public function commenter($auteur, $contenu, $id_art) {
        $id_art = $this->requete->getParametre("id");
        $auteur = $this->requete->getParametre("auteur");
        $contenu = $this->requete->getParametre("contenu");

        $this->commentaire->ajouterCommentaire($auteur, $contenu, $id_art);

        //Exécute l'action par défaut pour actualisé la liste des articles
        $this->executerAction("index");
    }
}