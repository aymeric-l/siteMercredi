<?php 

class DataBase{


public function getBdd($db_name, $db_user, $db_pass, $db_host) {
  		$bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", "$db_user", "$db_pass", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  		return $bdd;
	}

public function getDb(){
		require_once ROOT.'/config/config.php';

		if(!isset($config)){$config = infoDb();}
		if (!isset($dbInstance)){
				$dbInstance = DataBase::getBdd(
					$config["db_name"],
					$config["db_user"],
					$config["db_pass"],
					$config["db_host"]
					);
		}
		
		// return $this->bdd;
		return $dbInstance;
	}


}