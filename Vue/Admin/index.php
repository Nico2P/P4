<?php

$this->titre = "Administration du blog" ?>
<h2>Administration</h2>

<p>Bienvenue, <?= $this->nettoyer($login) ?> !</p>

<p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>

Le blog comporte
<?= $this->nettoyer($nbArticles) ?> article(s) et
<?= $this->nettoyer($nbCommentaires) ?> commentaire(s).

<hr/>

Liste des articles :

<table>
    <tr>
        <th>Id Article</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Action</th>
    </tr>
    <tr>

    </tr>



<?php foreach ($articles as $article):?>
    <tr>
        <th><a href="<?= "article/index/" . $this->nettoyer($article['id_art']) ?>"><?= $this->nettoyer($article['id_art']) ?></a></th>
        <th><p class="titreArticle"><?= $this->nettoyer($article['titre_art']) ?></p></th>
        <th><p><?= substr($this->nettoyer($article['contenu_art']),0 , 150) ?>...</p></th>
        <th>
            <a href="<?= "admin/modifier/". $this->nettoyer($article['id_art']) ?>"><p>Modifier</p></a>
            <a href="<?= "admin/supprimer/". $this->nettoyer($article['id_art']) ?>"><p>Supprimer</p></a>
        </th>
    </tr>
<?php endforeach; ?>

</table>
<div id="ajout">
<form method="post" action="admin/ajouter">
    <input type="button" value="G" style="font-weight: bold;" onclick="commande('bold');" />
    <input type="button" value="I" style="font-style: italic;" onclick="commande('italic');" />
    <input type="button" value="S" style="text-decoration: underline;" onclick="commande('underline');" />
    <input type="button" value="Lien" onclick="commande('createLink');" />
    <input type="button" value="Image" onclick="commande('insertImage');" />
    <select onchange="commande('heading', this.value); this.selectedIndex = 0;">
        <option value="">Titre</option>
        <option value="h1">Titre 1</option>
        <option value="h2">Titre 2</option>
        <option value="h3">Titre 3</option>
        <option value="h4">Titre 4</option>
        <option value="h5">Titre 5</option>
        <option value="h6">Titre 6</option>
    </select>
    <div id="editeur">
        <input id="titreArt" name="titre" type="text" placeholder="Titre de l'article" required/><br/>
        <textarea id="txtArticle" name="contenu" rows="4" placeholder="" required></textarea><br/>
    </div>
    <input type="button" onclick="resultat();" value="Obtenir le HTML" />
    <br />
    <textarea id="resultat"></textarea>
    <p><input type="submit" value="Ajouter"/></p>
</form>
</div>

</html>