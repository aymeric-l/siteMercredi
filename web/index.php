<?php 
session_start();
define('ROOT', dirname(__DIR__));
require_once ROOT.'/DataBase/DataBase.php';
require_once ROOT.'/Modele/Articles.php';
require_once ROOT.'/Modele/Login.php';
require_once ROOT.'/Modele/Livre.php';

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home"; 
}


if ($page==='home') {
	require ROOT.'/pages/index.php';
}elseif ($page==='articles') {
	require ROOT.'/pages/articles.php'; // suite route basique
}elseif ($page==='pageTrois') {
	require ROOT.'/pages/pageTrois.php'; // suite route basique
}elseif ($page==='livre') {
	require ROOT.'/pages/livre.php'; // suite route basique
}elseif ($page==='admin') {
	require ROOT.'/pages/admin/admin.php'; // suite route basique
}elseif ($page==='adminVerif') {
	require ROOT.'/pages/admin/adminVerif.php'; // suite route basique
}elseif ($page==='ajoutArticle') {
	require ROOT.'/pages/admin/ajoutArticle.php'; // suite route basique
}

