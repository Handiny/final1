<?php
//$controller = "utilisateur";
require_once ("{$ROOT}{$DS}model{$DS}ModelChauffeur.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="create";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des chauffeurss";
        $view = "readAll";
       	$tab_u = ModelChauffeur::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
		
	case "create":
		$pagetitle = "Enregistrer un Chauffeur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])){
			$ncin = $_REQUEST["ncin"];
			$n = $_REQUEST["n"];
			$p = $_REQUEST["p"];
			
			$recherche = ModelUtilisateur::select($ncin);
			if($recherche==null){
				$u = new ModelUtilisateur($ncin, $n, $p);	
				$tab = array(
				"ncin" => $ncin,
				"nom" => $n,
				"prenom" => $p
				);				
				$u->insert($tab);
				$pagetitle = "Utilisateur Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	
}
?>