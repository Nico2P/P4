<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 15/09/2017
 * Time: 11:39
 */

$this->titre = "Administration du blog" ?>

<h2>Administration</h2>

Bienvenu, <?= $this->nettoyer($login) ?> !

Le blog comporte <?= $this->nettoyer($nbArticles) ?> article(s) et
<?= $this->nettoyer($nbCommentaires) ?> commentaire(s).
