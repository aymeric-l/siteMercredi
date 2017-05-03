<?php 
	
class Login
{

	public function adminOrNot($pseudo, $password){

		$admins = DataBase::getDb()->query("SELECT * FROM admins")->fetchALL();

		foreach ($admins as $value) {
			if($value['pseudo'] == $pseudo AND $value['password'] == $password){
				$_SESSION['admin'] = 'yes';
			}
		}

	}


}
?>