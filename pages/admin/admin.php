<?php $titre = "Page admin !"; ?>

<?php ob_start(); ?>

<?php if(isset($_SESSION['admin'])){
	if($_SESSION['admin'] == 'yes'){
		echo 	'<form action="index.php?p=ajoutArticle" method="post">
			 	<input type="text" name="titre"><label>Titre de l\'article</label></br>
				<textarea name="message" rows="7" cols="50"></textarea><label>Contenu de l\'article</label></br>
				<input type="submit" name="ajoutArticle" value="Ajouter">
				</form>';
	}
}
else{
echo '<form id="formAdmin" action="index.php?p=adminVerif" method="post">
	<input type="text" name="pseudo"><label>Pseudo</label></br>
	<input type="password" name="password"><label>Password</label></br>
	<input type="submit" name="connectAdmin" value="Connexion">
</form>';
}
?>
<h1>Pseudo et mot de passe : robert / robert !</h1>

<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>