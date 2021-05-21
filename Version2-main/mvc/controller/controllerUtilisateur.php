<?php
//$controller = "utilisateur";
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];

	
	
switch ($action) {
   	
	case "create":
		$pagetitle = "Enregistrer un utilisateur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['nom_utilisateur']) && isset($_REQUEST['email']) && isset($_REQUEST['mdp'])){
			$nom_utilisateur= $_REQUEST["nom_utilisateur"];
			$email = $_REQUEST["email"];
			$mdp = md5($_REQUEST["mdp"]);
			$id_utilisateur = NULL;
			
			$recherche = ModelUtilisateur::select($id_utilisateur);
			if($recherche==null){
				$u = new ModelUtilisateur($nom_utilisateur, $email, $mdp);	
				$tab = array(
				"id_utilisateur" => NULL,
				"nom_utilisateur" => $nom_utilisateur,
				"prenom_utilisateur" => NULL,
				"email" => $email,
				"tel" => NULL,
				"ville" => NULL,
				"date_de_naissance" => NULL,
				"lieu_de_naissance" => NULL,
				"adresse" => NULL,
				"code_postal" => NULL,
				"pays" => NULL,
				"conducteur" => NULL,
				"num_permis" => NULL,
				"date_obtention" => NULL,
				"pays_delivrance" => NULL,
				"mdp" => $mdp
				);				
				$u->insert($tab);
				$pagetitle = "Utilisateur Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	/*case "update":
		if(isset($_REQUEST['ncin'])){
			$ncin = $_REQUEST['ncin'];
			$up = ModelUtilisateur::select($ncin);
			if($up!=null){
				$pagetitle = "Modifier l'utilisateur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;*/
		
	case "updated":
	
		if( isset($_REQUEST['nom_utilisateur']) && isset($_REQUEST['prenom_utilisateur']) && isset($_REQUEST['email']) && isset($_REQUEST['tel']) && isset($_REQUEST['ville']) && isset($_REQUEST['date_de_naissance']) && isset($_REQUEST['lieu_de_naissance']) && isset($_REQUEST['adresse']) && isset($_REQUEST['code_postal']) && isset($_REQUEST['pays']) && isset($_REQUEST['conducteur']) && isset($_REQUEST['num_permis']) && isset($_REQUEST['date_obtention'])&& isset($_REQUEST['pays_delivrance']) && isset($_REQUEST['mdp'])){
			
			
			$tab = array(
				"nom_utilisateur" => $nom_utilisateur,
				"prenom_utilisateur" => $prenom_utilisateur,
				"email" => $email,
				"tel" => $tel,
				"ville" => $ville,
				"date_de_naissance" => $date_de_naissance,
				"lieu_de_naissance" => $lieu_de_naissance,
				"adresse" => $adresse,
				"code_postal" => $code_postal,
				"pays" => $pays,
				"conducteur" => $conducteur,
				"num_permis" => $num_permis,
				"date_obtention" => $date_obtention,
				"pays_delivrance" => $pays_delivrance,
				"mdp" => $mdp
				);
			if (isset($_SESSION["id_utilisateur"]))
			$id_utilisateur=$_SESSION["id_utilisateur"];
			$o = ModelUtilisateur::select($id_utilisateur);
			if($o!=null){
				$u = $o->update($tab, $id_utilisateur);		
				$pagetitle = "Utilisateur modifié";
				$view = "updated";
				
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}
			
		break;
		case "connexion":
			if(isset($_REQUEST['email']))
			$email= $_REQUEST['email'];
			else die ("<p> print ton email</p>");
	
			if (isset ($_REQUEST['mdp']) )
			$mdp= md5($_REQUEST['mdp']) ;
			else die ("<p>print ton mdp</p>");
		 
			$tab_u = ModelUtilisateur::login($email,$mdp);
			if($tab_u == null){
	
			  echo 'error';
	
		  }else{
			$_SESSION['email'] = $email;
			$_SESSION['id_utilisateur'] = $tab_u->getId_utilisateur();
			$_SESSION['nom_utilisateur'] = $tab_u->getNom_utilisateur();
			$_SESSION['prenom_utilisateur'] = $tab_u->getPrenom_utilisateur();
			header("location:index.php?controller=home");
			exit;
			  header("location:index.php?controller=home");
			  exit;
		  }
		  break;
		  case "auth":
			$pagetitle = 'auth';
            $view = 'auth';
		     require ("{$ROOT}{$DS}view{$DS}view.php");
		   break;

		   case "deconnexion":
			
            unset($_SESSION['email']);
            session_destroy();
            header("location:index.php?controller=home");
			
            break;
        

			
			
}
?>