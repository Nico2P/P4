<!--
/**
* Created by PhpStorm.
* User: Nico
* Date: 18/08/2017
* Time: 14:15
*/
-->
<?php
require 'Controller/controller.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'article') {
            if (isset($_GET['id'])) {
                $id_art = intval($_GET['id']);
                if ($id_art != 0) {
                    article($id_art);
                } else
                    throw new Exception("Identifiant de d'article non valide");
            } else
                throw new Exception("Identifiant de d'article non défini");
        } else
            throw new Exception("Action non valide");
    } else {
        home();  // action par défaut
    }
}

catch (Exception $e) {
    erreur($e->getMessage());
}
