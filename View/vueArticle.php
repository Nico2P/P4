<?php

/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 21/08/2017
 * Time: 15:23
 */

$titre = "Jean Forteroche -" . $article['titre']; ?>

<?php ob_start(); ?>
<article>
    <header>
        <h1 class="titreArticle"><?= $article['titre']?></h1>
        <time><?= $article['date'] ?></time>
    </header>
    <p><? $article['contenu'] ?></p>
</article>
<hr />
<header>
    <h1 id="commentaireArticle"> Commentaires sur le chapitre : <?= $article['titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire) : ?>
    <p><?= $commentaire['auteur'] ?> :</p>
    <p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>


<?php require 'template.php'; ?>
