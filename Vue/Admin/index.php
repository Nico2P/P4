<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 15/09/2017
 * Time: 11:39
 */

$this->titre = "Administration du blog" ?>

<h2>Administration</h2>

<p>Bienvenue, <?= $this->nettoyer($login) ?> !</p>

<p><a id="deconnexion" href="connexion/deconnecter">Se déconnecter</a></p>

Le blog comporte
<?= $this->nettoyer($nbArticles) ?> article(s) et
<?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
