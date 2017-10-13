<?php
$this->titre = "Administration du blog" ?>

<h2>Administration</h2>


<h2> Ajout d'un nouvelle utilisater</h2>

<form method="post" action="admin/addUser">
    <div id="editeur">
        <input id="pseudo" name="pseudo" type="text" placeholder="Pseudo" required/><br/>
        <input id="mdp" name="mdp" placeholder="Mot de passe" required type="password"></input>
    </div>
    <p><input type="submit" value="Ajouter Utilisateur"/></p>
</form>
