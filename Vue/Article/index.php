<?php

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 21/08/2017
 * Time: 15:23
 */


$this->titre = $this->nettoyer($article['titre']); ?>

<article>
    <header>
        <h1 class="titreArticle"><?= $this->nettoyer($article['titre'])?></h1>
        <time><?= $this->nettoyer($article['date']) ?></time>
    </header>
    <p><?= $article['contenu'] ?></p>
</article>
<hr />
<header>
    <h1 id="commentaireArticle"> Commentaires sur le chapitre : <?= $this->nettoyer($article['titre']) ?></h1>
</header>
<?php foreach ($commentaires as $commentaire) : ?>

    <p><?= $this->nettoyer($commentaire['auteur']) ?> a dit :</p>
    <p><?= $this->nettoyer($commentaire['contenu']) ?></p>
    <p><?= $this->nettoyer($commentaire['id']) ?></p>

<form method="post" action="article/reported">
    <input type="hidden" name="id_com" value="<?=$commentaire['id'] ?>" />
    <input type="hidden" name="id_art" value="<?=$article['id'] ?>" />
    <input type="submit" value="Signalez le commentaire" onclick="return(confirm('Commentaire signalez !'));"/>

</form>
<?php endforeach; ?>

<form method="post" action="article/commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required/><br/>
    <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br/>
    <input type="hidden" name="id" value="<?=$article['id'] ?>" />
    <input type="submit" value="Commenter"/>
</form>

