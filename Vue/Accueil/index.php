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

<div id="acceuil" class="jumbotron";>
    <h1 class="display-4">Jean Forteroche / Acteur, Ecrivain</h1>
    <p class="lead">Bienvenue sur le blog, dans un souhait d'inovation le roman sera publié par épisode sur ce site.</p>
    <p><a class="btn btn-lg btn-primary" href="#list-chapitre" role="button">Commencer la lecture !</a></p>
</div>
</div>


<div id="list-chapitre" class="container">
    <?php foreach ($articles as $article):?>
    <div class="row">
        <div class="col-sm-12 col-md-10">
                <article class="index">
                    <header>
                        <a href="<?= "article/index/" . $this->nettoyer($article['id_art']) ?>">
                            <h1 class="titreArticle"><?= $this->nettoyer($article['titre_art']) ?></h1>
                        </a>
                        <time><?= substr($this->nettoyer($article['date_art']), 5, 20) ?></time>
                    </header>
                    <p><?= substr($article['contenu_art'],0 , 300) ?></p>
                </article>
        </div>
    </div>
    <?php endforeach; ?>
</div>
