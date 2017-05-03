<?php $titre = "Livre d'or"; ?>

<?php ob_start(); ?>

<?php 
	if(isset($_POST['pseudo']) AND isset($_POST['message'])){
		if($_POST['pseudo'] != '' AND $_POST['message'] != ''){
			Livre::ajoutAuLivre($_POST['pseudo'],$_POST['message']);
		}
	}
?>

<form action="index.php?p=livre" method="post">
	<input type="text" name="pseudo">
	<input type="message" name="message">
	<input type="submit" name="envoiDansLivre">
</form>

<?php Livre::afficherLivre(); ?>

<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>