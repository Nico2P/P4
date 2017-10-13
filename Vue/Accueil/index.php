<!--
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:30
 */
-->
<?php $this->titre = "Accueil"; ?>






<div class="container">
    <!-- Example row of columns -->
    <div class="row">

            <?php foreach ($articles as $article):?>
        <div class="col-md-4">
                <article class="accueil">
                    <header>
                        <a href="<?= "article/index/" . $this->nettoyer($article['id_art']) ?>">
                            <h1 class="titreArticle"><?= $this->nettoyer($article['titre_art']) ?></h1>
                        </a>
                        <time><?= $this->nettoyer($article['date_art']) ?></time>
                    </header>
                    <p><?= substr($article['contenu_art'],0 , 500) ?></p>
                </article>
        </div>
            <?php endforeach; ?>

</div> <!-- /container -->
