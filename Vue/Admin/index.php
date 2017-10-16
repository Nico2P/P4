<?php
$this->titre = "Administration du blog" ?>


    <h2 class="securearea-title">Administration</h2>

    <div id="login_destroy">
        <p>Bienvenue, <?= $this->nettoyer($login) ?> !</p>
        <p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>
    </div>

    <div id="infoblog">
        Le blog comporte
        <?= $this->nettoyer($nbArticles) ?> article(s) et
        <?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
    </div>
    <br/>

    <a href="<?= "admin/ajout"?>" class="btn btn-info btn-lg">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ajouter un article
    </a>

    <h2 class="securearea-title">Moderation des commentaires :</h2>
    <br/>
    <div class="table-responsive">
        <table class="table table-striped" id="tabcommentaires">
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
    </div>

<hr/>

    <h2 class="securearea-title">Liste des articles :</h2>
    <div class="table-responsive">
    <table id="tabadmin" class="table table-striped">
        <tr>
            <th>Id Article</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Action</th>
        </tr>
        <?php foreach ($articles as $article):?>
        <tr class="lgn-tab">
            <th class="id_art"><a href="<?= "article/index/" . $this->nettoyer($article['id_art']) ?>"><?= $this->nettoyer($article['id_art']) ?></a></th>
            <th class="titre_art"><p class="titreArticle"><?= $this->nettoyer($article['titre_art']) ?></p></th>
            <th class="ctn-art"><p><?= substr($article['contenu_art'],0 , 150) ?>...</p></th>
            <th>
                <a href="<?= "admin/modifier/". $this->nettoyer($article['id_art']) ?>" class="btn btn-info btn-lg">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier
                </a>
                <a href="<?= "admin/supprimer/". $this->nettoyer($article['id_art']) ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer?'));" class="btn btn-info btn-lg">
                    <i class="fa fa-trash" aria-hidden="true"></i> Supprimer
                </a>
            </th>
        </tr>
        <?php endforeach; ?>
    </table>
</div>


    <p>Fonction supplementaire :</p>
    <p><a id="addUser" href="admin/newUser">Ajouter un utilisateur</a></p>




