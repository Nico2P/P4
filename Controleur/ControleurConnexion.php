<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 18/09/2017
 * Time: 10:42
 */

require_once 'Framework/Controleur.php';
require_once 'Model/Utilisateur.php';

class ControleurConnexion extends Controleur {

    private $user;

    public function __construct()
    {
        $this->user = New Utilisateur();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter() {

        if($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->user->connecter($login,$mdp)) {
                $user = $this->user->getUser($login,$mdp);
                $this->requete->getSession()->setAttribut("user_id", $user['user_id']);
                $this->requete->getSession()->setAttribut("user_login", $user['user_login']);
                $this->rediriger("admin");
            }
            else
                $this->genererVue(array('msgErreur' => 'login ou mot de passe incorrects'), "index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non defini");
    }

    public function  deconnecter() {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }
}