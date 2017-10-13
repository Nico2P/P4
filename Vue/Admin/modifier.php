<?php
$this->titre = "Administration du blog" ?>

<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nkqmdbzathgp9tbu7benyljho91qgfkpgjdf0c34f2a0rrrz"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<h2>Administration</h2>
<p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>


<form method="post" action="admin/update">
    <div id="editeur">
        <input type="hidden" name="id" value="<?=$article['id'] ?>" />
        <input id="titreArt" name="titre" type="text" placeholder="<?= $this->nettoyer($article['titre'])?>" required/><br/>
        <textarea id="txtArticle" name="contenu" placeholder=""><?= $this->nettoyer($article['contenu']) ?></textarea>
    </div>
    <p><input type="submit" value="Modifier"/></p>
</form>

