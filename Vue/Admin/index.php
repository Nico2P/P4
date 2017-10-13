<?php
$this->titre = "Administration du blog" ?>


<h2>Administration</h2>

<p>Bienvenue, <?= $this->nettoyer($login) ?> !</p>

<p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>

Le blog comporte
<?= $this->nettoyer($nbArticles) ?> article(s) et
<?= $this->nettoyer($nbCommentaires) ?> commentaire(s).

<p>Les commentaires suivants ont été signalé :</p>
<?php foreach ($listreport as $comment_report):?>
<?= $comment_report["contenu"] ?> <br/>
<?php endforeach; ?>

<hr/>

<p><a id="ajouter" href="admin/ajout">Ajouter un article</a></p>
<p><a id="addUser" href="admin/newUser">Ajouter un utilisateur</a></p>



Liste des articles :

<table>
    <tr>
        <th>Id Article</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Action</th>
        <th>Commentaires signalez ?</th>
    </tr>
    <tr>

    </tr>



<?php foreach ($articles as $article):?>
    <tr>
        <th><a href="<?= "article/index/" . $this->nettoyer($article['id_art']) ?>"><?= $this->nettoyer($article['id_art']) ?></a></th>
        <th><p class="titreArticle"><?= $this->nettoyer($article['titre_art']) ?></p></th>
        <th><p><?= substr($article['contenu_art'],0 , 150) ?>...</p></th>
        <th>
            <a href="<?= "admin/modifier/". $this->nettoyer($article['id_art']) ?>"><p>Modifier</p></a>
            <a href="<?= "admin/supprimer/". $this->nettoyer($article['id_art']) ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer?'));"><p>Supprimer</p></a>
        </th>
    </tr>
<?php endforeach; ?>

</table>




