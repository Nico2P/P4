<?php
$this->titre = "Administration du blog" ?>

<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nkqmdbzathgp9tbu7benyljho91qgfkpgjdf0c34f2a0rrrz"></script>
    <script>tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });</script>
</head>
<h2>Administration</h2>
<div id="login_destroy">
    <p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>
</div>

<h2 class="securearea-title">Modifier un Article</h2>


<form method="post" action="admin/update" class="securearea-title">
    <div id="editeur">
        <input type="hidden" name="id" value="<?=$article['id'] ?>" />
        <input id="titreArt" name="titre" type="text" value="<?= $this->nettoyer($article['titre'])?>" required/><br/>
        <textarea id="txtArticle" name="contenu" placeholder=""><?= $this->nettoyer($article['contenu']) ?></textarea>
    </div>
    <p><input type="submit" value="Modifier"/></p>
</form>

