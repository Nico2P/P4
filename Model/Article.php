<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 15:16
 */

require_once 'Framework/Model.php';

class Article extends Model {

    // Retourne les articles
    public function getArticles() {
        $sql = 'select * from articles order by id_art ASC';
        $articles = $this->executerRequete($sql);
        return $articles;
    }

    // Retourne un article en fonction de l'id
    public function getArticle($id_art) {
        $sql = 'select id_art as id, date_art as date, titre_art as titre, contenu_art as contenu from articles WHERE id_art=?';
        $article = $this->executerRequete($sql, array($id_art));
        if ($article->rowCount() == 1)
            return $article->fetch();
        else
            throw new Exception("Aucun article ne correspond à l'indentifiant '$id_art'");
    }


    // Retourne le nombres d'articles
    public function getNombreArticles() {
        $sql = 'select count (*) as nbArticles from articles';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();
        return $ligne['nbArticles'];
    }
}