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
<h2 class="securearea-title">Administration</h2>

<div id="login_destroy">
    <p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>
</div>



<h2 class="securearea-title"> Ajout d'un article</h2>
<div id="bloc_edit" class="col-md-10">
<form method="post" action="admin/ajouter" class="securearea-title">
    <div id="editeur">
        <input id="titreArt"  name="titre" type="text" placeholder="Titre de l'article" required/><br/>
        <textarea id="txtArticle" class="txt_zone_admin" name="contenu" placeholder=""></textarea>
    </div>
    <p><input class="ajouter" type="submit" value="Ajouter"/></p>
</form>
</div>