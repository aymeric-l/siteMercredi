<?php $titre = "Es-tu un admin ?"; ?>

<?php ob_start(); ?>
<?php 
Login::adminOrNot($_POST['pseudo'], $_POST['password']);
if(isset($_SESSION['admin'])){
	if($_SESSION['admin'] == 'yes'){
		header('Location: index.php');
	}
}else{
	header('Location: index.php?p=admin');
}

?>

<?php $content = ob_get_clean(); ?>

<?php require ROOT.'/Vue/Templates/default.php'; ?>