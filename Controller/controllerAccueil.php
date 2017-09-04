<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 16:35
 */

require_once 'Model/article.php';
require_once 'View/Vue.php';

class controllerAccueil {

    private $articles;

    public function __construct(){
        $this->articles = new article();
    }

    // Affiche la listes des billets
    public function home() {
        $articles = $this->articles->getArticles();
        $vue = new Vue("Home");
        $vue->generer(array('articles' => $articles));
    }
}