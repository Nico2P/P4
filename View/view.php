<!--
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/08/2017
 * Time: 14:30
 */
-->

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <link href="../public/stylesheet.css" rel="stylesheet" />

    <title>Accueil</title>

</head>

<body>

    <header>

        <h1>Bienvenu sur le blog de Jean Forteroche</h1>

    </header>

    <?php

    foreach ($articles as $article): ?>

        <article>

            <h2><?php echo $article['titre'] ?></h2>
            <h3><?php echo $article['auteur'] ?></h3>
            <h3><?php echo $article['date'] ?></h3>

            <p><?php echo $article['contenu'] ?></p>

        </article>

    <?php endforeach ?>

<footer class="footer">

    <p>@Nico2P ----- En cours de développement ---- @Nico2P</p>

</footer>

</body>

</html>