<?php 
	
class Livre
{

	public function afficherLivre(){

		$livre = DataBase::getDb()->query("SELECT * FROM livre ORDER BY id DESC")->fetchALL();
		foreach ($livre as $value) {
			echo "<div id='livre'>
				<p id='pseudoLivre'>".$value['pseudo']." :".$value['message']."</p>
				</div>";
		}
	}

	public function ajoutAuLivre($pseudo, $message){
		DataBase::getDb()->prepare("INSERT INTO livre(pseudo, message) VALUES(:pseudo, :message)")->execute(array(':pseudo' => $pseudo, ':message' => $message));
	}

}	
?>