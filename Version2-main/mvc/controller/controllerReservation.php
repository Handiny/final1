<?php
//$controller = "Reservation";
require_once ("{$ROOT}{$DS}model{$DS}ModelReservation.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=create.*/
	else $action="create";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des reservations";
        $view = "readAll";
       	$tab_u = ModelReservation::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	/*case "read":	
		if (isset($_SESSION["id_utilisateur"])){
			$id_u = $_SESSION["id_utilisateur"];
			$u = ModelReservation::select($id_u);
				if($u!=null){
					$pagetitle = "Details de la voiture";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		/*
		
	case "delete":
		if(isset($_REQUEST['immatriculation'])){
			$ncin = $_REQUEST['immatriculation'];
			$del = ModelVoiture::select($immatriculation);
			if($del!=null){
			$del->delete($immatriculation);
			header('Location: index.php?controller=voiture&action=readAll');
			}
		}
	    break;
		*/
	case "create":
        if(isset($_REQUEST['immatriculation'])){
	    $id_voiture = $_REQUEST['immatriculation'];
		$pagetitle = "Louer une voiture";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
        }
		break;
		
	case "created":
        //on doit ajouter isset($_REQUEST['id_locateur']) qui va etre récupéré via l'URL par la session
		if(isset($_REQUEST['id_voiture']) && isset($_REQUEST['message']) && isset($_REQUEST['date_deb'])&& isset($_REQUEST['date_fin']) ){
			//$id_locateur= $_REQUEST["id_locateur"];
			$id_voiture = $_REQUEST["id_voiture"];
			$message = $_REQUEST["message"];
            $date_deb = $_REQUEST["date_deb"];
            $date_fin = $_REQUEST["date_fin"];
		
				$u = new ModelReservation($_SESSION["id_utilisateur"], $id_voiture, $message, $date_deb, $date_fin,NULL);	
				$tab = array(
				"id_locateur" => $_SESSION["id_utilisateur"],
				"id_voiture" => $id_voiture,
				"message" => $message,
				"date_deb" => $date_deb,
				"date_fin" => $date_fin,
                "id_reservation"=> NULL
				);				
				$u->insert($tab);
				$pagetitle = "Reservation en cours de traitement";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				
		}
		break;
	
	/*case "update":
		if(isset($_REQUEST['immatriculation'])){
			$immatriculation = $_REQUEST['immatriculation'];
			$up = ModelVoiture::select($immatriculation);
			if($up!=null){
				$pagetitle = "Modifier la voiture ";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['immatriculation']) && isset($_REQUEST['marque']) && isset($_REQUEST['modele']) && isset($_REQUEST['annee']) && isset($_REQUEST['boitevitesse']) && isset($_REQUEST['kilometrage'])  && isset($_REQUEST['puissance_fiscale']) && isset($_REQUEST['carburant']) && isset($_REQUEST['description'])){
			$oldnimm = $_REQUEST['immatriculation'];
			$tab = array(
				"immatriculation" => $immatriculation,
				"marque" => $marque,
				"modele" => $modele,
				"annee" => $annee,
				"boitevitesse" => $boitevitesse,
				"kilometrage" => $kilometrage,
				"puissance_fiscale" => $puissance_fiscale,
				"carburant" => $carburant,
				"description" => $description
                //"proprietaire_ncin" => 
				);
			$o = ModelVoiture::select($oldnimm);
			if($o!=null){
				$u = $o->update($tab, $oldnimm);		
				$pagetitle = "Voiture modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break; */
}

?>
