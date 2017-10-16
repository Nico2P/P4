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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Billet simple pour l'Alaska">
    <meta name="author" content="Jean Forteroche">

    <base href="<?= $racineWeb ?>" >
    <link rel="stylesheet" href="../public/stylesheet.css">
    <link rel="stylesheet" href="../public/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title><?= $titre ?></title>

</head>

<body>
    <div id="bloc_page" class="container">
        <a href="#contenu" class="top"><i class="fa fa-angle-up fa-4x" aria-hidden="true"></i></a>

        <div id="navigation" class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item">
                            <a class="nav-link" href="accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin">Admin<span id="adminlogo"><img src="../public/advanced-admin-icon.png"></span></a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted">Billet simple pour l'Alaska</h3>
            </div>
        </div>


    <div id="contenu">

        <?= $contenu ?>

    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">@Nico2p</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>