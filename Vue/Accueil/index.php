<!--
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:30
 */
-->
<?php $this->titre = "Accueil"; ?>


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
    <hr/>
<?php endforeach; ?>
