<?php

class Articles
{


public function afficherArticles(){

	$articles = DataBase::getDb()->query("SELECT * FROM articles ORDER BY id DESC")->fetchALL();
	foreach ($articles as $value) {
		echo "<div id='article'>";
		echo "<h1>".$value['titre']."</h1>";
		echo "<h3>".$value['message']."</h3>";
		echo "</div>";
	}

}

public function ajouterArticle($titre, $message){

	DataBase::getDb()->prepare("INSERT INTO articles(titre, message) VALUES (:titre, :message) ")->execute(array(':titre' => $titre, ':message' => $message));
}

}
?>