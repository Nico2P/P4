<?php

require_once 'ControleurSecurise.php';
require_once 'Model/ArticleManager.php';
require_once 'Model/Commentaire.php';

class ControleurAdmin extends ControleurSecurise
{
    private $article;
    private $commentaire;

    public function __construct()
    {
        $this->article = new ArticleManager();
        $this->commentaire = new Commentaire();
    }


    // Action par défaut
    public function index()
    {
        $nbArticles = $this->article->getNombreArticles();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $listArticles = $this->article->getArticles();
        $this->genererVue(array('nbArticles' => $nbArticles, 'nbCommentaires' => $nbCommentaires, 'login' => $login, 'articles' => $listArticles));
    }

    public function ajouter() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        $this->article->ajouterArticle($titre, $contenu);
        $this->executerAction("index");
    }

    public function supprimer() {
        $id = $this->requete->getParametre("id");
        $this->article->supprimerArticle($id);
        $this->executerAction("index");

    }


}
