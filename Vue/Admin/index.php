<?php
$this->titre = "Administration du blog" ?>


<h2>Administration</h2>

<p>Bienvenue, <?= $this->nettoyer($login) ?> !</p>

<p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>

Le blog comporte
<?= $this->nettoyer($nbArticles) ?> article(s) et
<?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
<br/>

<h2>Moderation des commentaires :</h2>
<br/>

<table>
    <tr>
        <th>auteur</th>
        <th>contenu</th>
        <th>Action</th>
    </tr>
    <?php foreach ($listreport as $comment_report):?>
        <tr>
            <td><?= $comment_report["auteur"] ?></td>
            <td><?= $comment_report["contenu"] ?></td>
            <td>
                <form method="post" action="admin/suppCommentaire">
                    <input name="id" type="hidden"  value="<?=$comment_report["id"]?>" />
                    <input type="submit" value="Supprimer" onclick="return(confirm('Voulez vous supprimé le commentaire ?'));"/>
                </form>
                <form method="post" action="admin/notReport">
                    <input name="id" type="hidden"  value="<?=$comment_report["id"]?>" />
                    <input type="submit" value="Validez" onclick="return(confirm('Voulez vous ne plus signalez le commentaire ?'));"/>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<hr/>

<p><a id="ajouter" href="admin/ajout">Ajouter un article</a></p>
<p><a id="addUser" href="admin/newUser">Ajouter un utilisateur</a></p>



<h2>Liste des articles :</h2>

<table>
    <tr>
        <th>Id Article</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Action</th>
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







