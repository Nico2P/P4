<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 15/09/2017
 * Time: 11:39
 */

$this->titre = "Administration du blog" ?>

<h2>Administration</h2>

Bienvenue, <?= $this->nettoyer($login) ?> !

<a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a>

Le blog comporte <?= $this->nettoyer($nbArticles) ?> article(s) et
<?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
