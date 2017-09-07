<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 16:35
 */

require_once 'Framework/Controleur';
require_once 'Model/index.php';


class ControlerAccueil  extends Controleur {

    private $articles;

    public function __construct(){
        $this->articles = new article();
    }

    // Affiche la listes des billets
    public function index() {
        $articles = $this->articles->getArticles();
        $this->genererVue(array('articles' => $articles));
    }
}