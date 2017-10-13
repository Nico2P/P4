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

<p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>



<h2> Ajout d'un article</h2>

<form method="post" action="admin/ajouter">
    <div id="editeur">
        <input id="titreArt" name="titre" type="text" placeholder="Titre de l'article" required/><br/>
        <textarea id="txtArticle" name="contenu" placeholder=""></textarea>
    </div>
    <p><input type="submit" value="Ajouter"/></p>
</form>
