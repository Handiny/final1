<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelContact.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];

	
	
switch ($action) {
   	
	case "create":
		$pagetitle = "Enregistrer un contact";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
        case "created":
            if (isset($_REQUEST['nom_prenom']) && isset($_REQUEST['email']) && isset($_REQUEST['message'])){
                
                $nom_prenom= $_REQUEST["nom_prenom"];
                $email = $_REQUEST["email"];
                $message = $_REQUEST["message"];
                $id_contact = NULL;
                
                $recherche = ModelContact::select($id_contact);
                if($recherche==null){
                    $u = new ModelContact($nom_prenom, $email, $message);	
                    $tab = array(
                    "id_contact" => NULL,
                    "nom_prenom" => $nom_prenom,
                    "email" => $email,
                    "message" => $message
                    );				
                    $u->insert($tab);
                    $pagetitle = "Contact Enregistré";
                    header('Location:index.php?controller=contact&action=create');
                    require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	

		
	
}
?>

