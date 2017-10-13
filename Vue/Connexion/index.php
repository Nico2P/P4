<?php
$this->titre = "Espace Admin" ?>

<p>Vous devez être connecté pour accéder à cette zone</p>


<div class="container">

    <form action="connexion/connecter" method="post" class="form-signin">
        <h2 class="form-signin-heading">Espace sécurisé</h2>
        <label for="name" class="sr-only">Nom</label>
        <input type="name" id="inputName" name="login" class="form-control" placeholder="Nom" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="mdp" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>

</div> <!-- /container -->



<?php if (isset($msgErreur)): ?>
<p><?=$msgErreur ?> </p>
<?php endif; ?>
