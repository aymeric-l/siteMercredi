<?php $titre = "Les articles du site"; ?>

<?php ob_start(); ?>


<?php 
Articles::afficherArticles();
?>


<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>