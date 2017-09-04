<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 17:38
 */

require_once 'controllerAccueil.php';
require_once 'controllerArticle.php';
require_once 'View/Vue.php';

class Routeur {

    private $ctrlAccueil;
    private $ctrlArticle;

    public function __construct(){
        $this->ctrlAccueil = new controllerAccueil();
        $this->ctrlArticle = new controllerArticle();
    }

    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'article') {
                    if (isset($_GET['id'])) {
                        $id_art = intval($_GET['id']);
                        if ($id_art != 0) {
                            $this->ctrlArticle->article($id_art);
                        } else
                            throw new Exception("Identifiant de d'article non valide");
                    } else
                        throw new Exception("Identifiant de d'article non défini");
                } else
                    throw new Exception("Action non valide");
            } else {
                $this->ctrlAccueil->home();  // action par défaut
            }
        }

        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }

    }

    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}