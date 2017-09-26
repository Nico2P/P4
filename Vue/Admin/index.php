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

<?php foreach ($articles as $article):?>
    <article>
        <header>
            <a href="<?= "article/index/" . $this->nettoyer($article['id_art']) ?>">
                <h1 class="titreArticle"><?= $this->nettoyer($article['titre_art']) ?></h1>
            </a>
            <time><?= $this->nettoyer($article['date_art']) ?></time>
        </header>
        <p><?= $this->nettoyer($article['contenu_art']) ?></p>
    </article>
    <a href="<?= "admin/supprimer/". $this->nettoyer($article['id_art']) ?>">
        <p>Supprimer l'article</p>
    </a>
    <hr/>
<?php endforeach; ?>


<h3>Ajouter un Article ( en cours need WYSIWYG )</h3>

<form method="post" action="admin/ajouter">
    <input id="titre" name="titre" type="text" placeholder="Titre" required/><br/>
    <textarea id="txtArticle" name="contenu" rows="4" placeholder="Votre article" required></textarea><br/>
    <input type="submit" value="Ajouter"/>
</form>









