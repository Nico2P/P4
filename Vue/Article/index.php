<?php

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 21/08/2017
 * Time: 15:23
 */

$this->titre = "Jean Forteroche -" . $article['titre']; ?>

<article>
    <header>
        <h1 class="titreArticle"><?= $article['titre']?></h1>
        <time><?= $article['date'] ?></time>
    </header>
    <p><?= $article['contenu'] ?></p>
</article>
<hr />
<header>
    <h1 id="commentaireArticle"> Commentaires sur le chapitre : <?= $article['titre'] ?></h1>
</header>
<?php foreach ($commentaire as $commentaires) : ?>
    <p><?= $commentaires['auteur'] ?> a dit :</p>
    <p><?= $commentaires['contenu'] ?></p>
<?php endforeach; ?>

<form method="post" action="../../index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required/><br/>
    <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br/>
    <input type="hidden" name="id" value="<?=$article['id'] ?>" />
    <input type="submit" value="Commenter"/>
</form>

