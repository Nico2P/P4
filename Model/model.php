<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:58
 */


// TOUTES LES FONCTIONS CRUD ICI

// Retourne les articles
function getArticles() {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog_user', 'Forteroche');

    $articles = $bdd->query('select * from articles order by id desc');
    return $articles;
}