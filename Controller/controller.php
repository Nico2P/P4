<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 22/08/2017
 * Time: 15:47
 */

require 'Model/model.php';

//Affiche tout les billets
function home(){
    $articles = getArticles();
    require 'View/viewHome.php';
}

//Affiche l'article et les commentaires associers
function article($idArticle) {
    $article = getArticle($idArticle);
    $commentaires = getCommentaire($idArticle);
    require 'View/vueArticle.php';
}

//Error
function error($msgError) {
    require 'View/viewError.php';
}