<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 31/08/2017
 * Time: 16:06
 */

class Vue {

    //Fichier associé a la vue
    private $fichier;
    // Titre de la vue
    private $titre;

    public function __construct($action){
       // Détermine le nom du fichier vue à partir de l'action
        $this->fichier = "View/vue" . $action . ".php";
    }

    // génere et affiche la vue
    public function generer($donnees) {
        //Partie spécifique de la vue
        $contenu = $this->genererFichier($this->fichier, $donnees);
        //Génération gabarit
        $vue = $this->genererFichier("View/template.php", array("titre" => $this->titre, "contenu" => $contenu));
        // Renvoi au navigateur
        echo $vue;
    }

    //Génère le fichier de vue
    private function genererFichier($fichier, $donnees) {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);
            // tempo de sortie
            ob_start();
            //Inclut le fichier vue et son resultat dans le tampo de sortie
            require $fichier;
            // renvoi et stop tempo
            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }
}