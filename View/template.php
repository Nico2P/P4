<!--
/**
* Created by PhpStorm.
* User: Nico
* Date: 18/08/2017
* Time: 11:58
*/
-->

<!doctype html>

<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../public/stylesheet.css">
    <title><?= $titre ?></title>
</head>
<body>
    <div ="bloc_page">
    <header>
        <a href="../index.php"><h1 id="title">Blog de Jean Forteroche</h1></a>
    </header>
    <div id="contenu">

<?= $contenu ?>

    </div>
<footer class="footer">
    <p>@Nico2P ----- En cours de développement ---- @Nico2P</p>
</footer>
</body>
</html>