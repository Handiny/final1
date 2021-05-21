<?php
require_once ("{$ROOT}{$DS}config{$DS}Conf.php"); 

class Model{
	  
	private static $pdo;
	
	public static function Init(){
		$host = Conf::getHostname();
		$dbname = Conf::getDatabase();
		$login = Conf::getLogin();
		$pass = Conf::getPassword();
		try{
			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
			
			} catch(PDOException $e) {
				die ($e->getMessage()); 
			}
	}

	public static function getAll(){
	    $SQL="SELECT * FROM ".static::$table;
		$rep = Model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}
	
	

    public function select($cle_primaire) {
	    $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
	    $req_prep = Model::$pdo->prepare($sql);
	    $req_prep->bindParam(":cle_primaire", $cle_primaire);
	    $req_prep->execute();
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
	    if ($req_prep->rowCount()==0){
			return null;
			die();
	  	}else{
			$rslt = $req_prep->fetch();
			return $rslt;
		}
	      
  	}
	  
	
	  public static function login($email,$mdp){

		$sql = 'SELECT * FROM Utilisateur where email =:email AND mdp =:mdp' ;
		$req_prep = self::$pdo->prepare($sql);
		$req_prep->bindParam(":email", $email);
		$req_prep->bindParam(":mdp", $mdp);
		
		$req_prep->execute();
		
		$req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'. ucfirst( static::$table));
				   
		if ($req_prep->rowCount()==0){
			return null;
			die();
		  }else{
			
			return $req_prep->fetch();
		}
		}
		public static function getAllR($id_locateur){
			$sql= 'SELECT * FROM Reservation where id_locateur =:id_locateur';
			$req_prep = self::$pdo->prepare($sql);
			$req_prep->bindParam(":id_locateur", $id_locateur);
			$req_prep->execute();
			$req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
			return $req_prep->fetchAll();
		}
		public static function getAllV($id_locateur){
			$sql= 'SELECT * FROM Voiture where utilisateur_id =:id_locateur';
			$req_prep = self::$pdo->prepare($sql);
			$req_prep->bindParam(":id_locateur", $id_locateur);
			$req_prep->execute();
			$req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
			return $req_prep->fetchAll();
		}
		public static function locat($id_locateur){

			$sql = 'SELECT * FROM Reservation where id_locateur =:id_locateur';
			$req_prep = self::$pdo->prepare($sql);
			$req_prep->bindParam(":id_locateur", $id_locateur);
			
			
			$req_prep->execute();
			
			$req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'. ucfirst( static::$table));
					   
			if ($req_prep->rowCount()==0){
				return null;
				die();
			  }else{
				
				return $req_prep->fetch();
			}
			}
		


	public function delete($cle_primaire) {
		$sql = "DELETE FROM ".static::$table." WHERE ".static::$primary."=:cle_primaire";
		$req_prep = Model::$pdo->prepare($sql);
		$req_prep->bindParam(":cle_primaire", $cle_primaire);
		$req_prep->execute();
	}

	public function update($tab, $cle_primaire) {
		$sql = "UPDATE ".static::$table." SET";
		foreach ($tab as $cle => $valeur){
			$sql .=" ".$cle."=:new".$cle.",";
		}
		$sql=rtrim($sql,",");
		$sql.=" WHERE ".static::$primary."=:oldid;";
		
		  $req_prep = Model::$pdo->prepare($sql);
		  $values = array();
	  
	  foreach ($tab as $cle => $valeur){
				$values[":new".$cle] = $valeur;
		  }

		  $values[":oldid"] = $cle_primaire;
		  $req_prep->execute($values);
		  $obj = Model::select($tab[static::$primary]);
		  return $obj;
  }
  

  public function insert($tab){
    $sql = "INSERT INTO ".static::$table." VALUES(";
    foreach ($tab as $cle => $valeur){
		$sql .=" :".$cle.",";
	}
	$sql=rtrim($sql,",");
	$sql.=");";
    $req_prep = Model::$pdo->prepare($sql);
    $values = array();
    foreach ($tab as $cle => $valeur)
      		$values[":".$cle] = $valeur;
    $req_prep->execute($values);
  }
	
}//class
Model::Init();