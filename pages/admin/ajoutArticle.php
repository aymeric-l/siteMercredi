<?php $titre = "Es-tu un admin ?"; ?>

<?php ob_start(); ?>
<?php 
if(isset($_POST['titre']) AND isset($_POST['message'])){
	if($_POST['titre'] != '' AND $_POST['message'] != ''){
	
		Articles::ajouterArticle($_POST['titre'], $_POST['message']);
		header('Location: index.php?p=pageDeux');

	}else{
		header('Location: index.php?p=admin');
	}
}else{
	header('Location: index.php?p=admin');
}
?>

<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>