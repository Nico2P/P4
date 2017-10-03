<?php

require_once 'ControleurSecurise.php';
require_once 'Model/ArticleManager.php';
require_once 'Model/CommentaireManager.php';

class ControleurAdmin extends ControleurSecurise
{
    private $articleManager;
    private $commentaireManager;

    public function __construct()
    {
        $this->articleManager = new ArticleManager();
        $this->commentaireManager = new CommentaireManager();
    }


    // Action par défaut
    public function index()
    {
        $nbArticles = $this->articleManager->getNombreArticles();
        $nbCommentaires = $this->commentaireManager->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $listArticles = $this->articleManager->getArticles();
        $this->genererVue(array('nbArticles' => $nbArticles, 'nbCommentaires' => $nbCommentaires, 'login' => $login, 'articles' => $listArticles));
    }

    public function ajouter() {
        $titre = $this->requete->getParametre("titre");
        $contenu = $this->requete->getParametre("contenu");
        $contenu =
        $this->articleManager->ajouterArticle($titre, $contenu);
        $this->rediriger("admin");
    }

    public function supprimer() {
        $id = $this->requete->getParametre("id");
        $this->articleManager->supprimerArticle($id);
        $this->rediriger("admin");

    }

    public function ajout() {
    }


}
