<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/09/2017
 * Time: 10:59
 */

$this->titre = "Connexion a l'espace Admin" ?>

<p>Vous devez être connecté pour accéder à cette zone</p>
<form action="connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Entrez votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Entrez mot de passe" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
<p><?=$msgErreur ?> </p>
<?php endif; ?>
