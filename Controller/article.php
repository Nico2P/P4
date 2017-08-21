<?php require '../Model/model.php'; ?>

<?php

try {
    if(isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if ($id != 0) {
            $article = getArticle($id);
            $commentaire = getCommentaire($id);
            require 'View/vueArticle.php';
        }
        else
            throw new Exception("Identifiant d'article inconnu");
    }
    else
        throw new Exception("Aucun identifiant d'article");
}

catch (Exception $e) {
    $msgError = $e->getMessage();
    require '../View/viewError.php';
}