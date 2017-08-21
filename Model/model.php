<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:58
 */


// TOUTES LES FONCTIONS CRUD ICI ?

// Connection Bdd
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog_user', 'Forteroche', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

// Retourne les articles
function getArticles() {
    $bdd = getBdd();
    $articles = $bdd->query('select * from articles order by id_art desc');
    return $articles;
}

// Retourne un article en fonction de l'id
function getArticle($id_art) {
    $bdd = getBdd();
    $article = $bdd->query('select id_art as id, date_art as date, titre_art as titre, contenu_art as contenu from article  where id_art=?');
    $article->execute(array($id_art));
    if ($article->rowCount() === 1)
        return $article->fetch();
    else
        throw new Exception("Aucun article ne correspond à l'indentifiant '$id_art'");
}

function getCommentaire($id_art) {
    $bdd = getBdd();
    $commentaire = $bdd->prepare('select id_com as id, date_com as date, auteur_com as auteur, contenu_com as contenu from commentaires where id_art=?');
    $commentaire->execute(array($id_art));
    return $commentaire;
}
