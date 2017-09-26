<?php
$this->titre = "Espace Admin" ?>

<p>Vous devez être connecté pour accéder à cette zone</p>
<form action="connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Entrez votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Entrez mot de passe" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
    <p><?=$msgErreur ?> </p>
<?php endif; ?>
