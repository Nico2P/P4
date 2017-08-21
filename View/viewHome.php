<!--
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:30
 */
-->
<?php $titre = "Accueil"; ?>

<?php ob_start(); ?>
<?php foreach ($articles as $article): ?>
    <article>
        <header>
            <a href="<?= "Controller/article.php?id=" . $article['id_art'] ?>">
            <h1 class="titreArticle"><?= $article['titre_art'] ?></h1>
            </a>
            <time><?= $article['date_art'] ?></time>
        </header>
        <p><?= $article['contenu_art'] ?></p>
    </article>
    <hr/>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
