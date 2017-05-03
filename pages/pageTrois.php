<?php $titre = "C'est la page Trois"; ?>

<?php ob_start(); ?>

<h2>LA PAGE 3</h2>

<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>