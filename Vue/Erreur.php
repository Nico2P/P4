<?php $this->titre = 'Erreur'; ?>

<?php ob_start() ?>
<p>L'erreur suivante est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>
