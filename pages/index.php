<?php $titre = "Bienvenue sur l'index"; ?>

<?php ob_start(); ?>

<h2>Page de base</h2>
<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS2dbNOb2IYdhB5Pf2hmO9huCGUcotad7IjWbh0INhI4CLgS5-z">

<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>