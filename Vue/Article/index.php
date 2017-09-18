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
    <p><?= $this->nettoyer($article['contenu']) ?></p>
</article>
<hr />
<header>
    <h1 id="commentaireArticle"> Commentaires sur le chapitre : <?= $this->nettoyer($article['titre']) ?></h1>
</header>
<?php foreach ($commentaires as $commentaire) : ?>
    <p><?= $this->nettoyer($commentaire['auteur']) ?> a dit :</p>
    <p><?= $this->nettoyer($commentaire['contenu']) ?></p>
<?php endforeach; ?>

<form method="post" action="article/commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required/><br/>
    <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br/>
    <input type="hidden" name="id" value="<?=$article['id'] ?>" />
    <input type="submit" value="Commenter"/>
</form>


