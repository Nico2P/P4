<?php $titre = 'Error'; ?>

<?php ob_start() ?>
<p>L'erreur suivante est survenue : <?= $msgError ?></p>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
