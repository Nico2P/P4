<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/09/2017
 * Time: 10:26
 */

require_once 'Framework/Model.php';

class Utilisateur extends Model
{
    //Vérifie que l'utilisateur existe dans la BD
    public function connecter($login, $mdp){
        $sql = 'select user_id as user_id, user_login as login, user_mdp as mdp from USER WHERE user_login=? AND user_mdp=?';
        $user = $this->executerRequete($sql, array($login, $mdp));
        return ($user->rowCount() == 1);
    }


    public function getUser($login, $mdp){
        $sql = 'select user_id as user_id, user_login as login, user_mdp as mdp from USER WHERE user_login=? AND user_mdp=?';
        $user = $this->executerRequete($sql, array($login, $mdp));
        if ($user->rowCount() == 1)
            return $user->fetch();
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }
}