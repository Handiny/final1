<?php
$pagetitle = 'compte';
$view = 'compte';
$controller = 'compte';
require_once ("{$ROOT}{$DS}model{$DS}ModelReservation.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelVoiture.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php");
/* Read Reservation */
if (isset($_SESSION["id_utilisateur"])) { 
    $id_locateur=$_SESSION["id_utilisateur"];}
    $tab_reserv = ModelReservation::getAllR($id_locateur);
/* Read Voiture */
    $tab_voit = ModelVoiture::getAllV($id_locateur);
/* update Utilisateur */
//if( isset($_REQUEST['nom_utilisateur']) && isset($_REQUEST['prenom_utilisateur'])  && isset($_REQUEST['tel'])){
if( isset($_REQUEST['nom_utilisateur']) && isset($_REQUEST['prenom_utilisateur']) && isset($_REQUEST['email']) && isset($_REQUEST['tel']) && isset($_REQUEST['ville']) && isset($_REQUEST['date_de_naissance']) && isset($_REQUEST['lieu_de_naissance']) && isset($_REQUEST['adresse']) && isset($_REQUEST['code_postal']) && isset($_REQUEST['pays'])  && isset($_REQUEST['num_permis']) && isset($_REQUEST['date_obtention'])&& isset($_REQUEST['mdp'])){
			
        
       		
    $tab = array(
        "nom_utilisateur" => $_REQUEST["nom_utilisateur"],
        "prenom_utilisateur" => $_REQUEST["prenom_utilisateur"],
        "email" => $_REQUEST['email'],
        "tel" => $_REQUEST['tel'],
        "ville" => $_REQUEST['ville'],
        "date_de_naissance" => $_REQUEST['date_de_naissance'],
        "lieu_de_naissance" => $_REQUEST['lieu_de_naissance'],
        "adresse" => $_REQUEST['adresse'],
        "code_postal" => $_REQUEST['code_postal'],
        "pays" => $_REQUEST['pays'],
        //"conducteur" => $_REQUEST['conducteur'],
        "num_permis" => $_REQUEST['num_permis'],
        "date_obtention" => $_REQUEST['date_obtention'],
        //"pays_delivrance" => $pays_delivrance,
        "mdp" => $_REQUEST['mdp']
        );

    $o = ModelUtilisateur::select($id_locateur);
    if($o!=null){
        $u = $o->update($tab, $id_locateur);	
        echo'cbon ! ';
        
        
    }
}
/*update voiture*/
if(isset($_REQUEST['immatriculation']) && isset($_REQUEST['marque']) && isset($_REQUEST['modele']) && isset($_REQUEST['annee']) && isset($_REQUEST['boitevitesse']) && isset($_REQUEST['kilometrage'])  && isset($_REQUEST['puissance_fiscale']) && isset($_REQUEST['carburant']) && isset($_REQUEST['description'])){
  
    $tab_voit = array(
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
    $o = ModelVoiture::select($id_locateur);
    if($o!=null){
        $u = $o->update($tab_voit, $id_locateur);		
       echo' voiture c bon ';
    }
}	
    


require("{$ROOT}{$DS}view{$DS}view.php"); // chargement du modèle

?>