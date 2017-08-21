<!--
/**
* Created by PhpStorm.
* User: Nico
* Date: 18/08/2017
* Time: 14:15
*/
-->
<?php

require 'Model/model.php';

try {
$articles = getArticles();
require 'View/viewHome.php';
}
catch (Exception $e) {
    $msgError = $e->getMessage();
    require 'View/viewError.php';
}