<?php

require_once 'ControleurSecurise.php';
require_once 'Model/Article.php';
require_once 'Model/Commentaire.php';

class ControleurAdmin extends ControleurSecurise
{
    private $article;
    private $commentaire;

    public function __construct()
    {
        $this->article = new Article();
        $this->commentaire = new Commentaire();
    }


    // Action par défaut
    public function index()
    {
        $nbArticles = $this->article->getNombreArticles();
        $nbCommentaires = $this->commentaire->getNombreCommentaires();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbArticles' => $nbArticles, 'nbCommentaires' => $nbCommentaires, 'login' => $login));
    }

}
