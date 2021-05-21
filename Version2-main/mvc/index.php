<?php
session_start() ;
// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;
//echo '$ROOT= '.$ROOT;
// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
$DS = DIRECTORY_SEPARATOR;

$controleur_default = "home" ;

if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];

				switch($controller){

      
				case 'home':
							require("{$ROOT}{$DS}controller{$DS}controllerHome.php");
							break;
			
						  
				
				case 'contact':
					require("{$ROOT}{$DS}controller{$DS}controllerContact.php");
					break;

				case 'faq':
						require("{$ROOT}{$DS}controller{$DS}controllerFaq.php");
						break;
				case 'chauffeur':
							require("{$ROOT}{$DS}controller{$DS}controllerChauffeur.php");
							break;
				case 'utilisateur':
					require("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
					break;
							
			     case "voiture" :
								require("{$ROOT}{$DS}controller{$DS}controllerVoiture.php");
								break;
				 case "compte" :
									require("{$ROOT}{$DS}controller{$DS}controllerCompte.php");
									break;
				 case 'comment':
								require("{$ROOT}{$DS}controller{$DS}controllerComment.php");
								break;
				 
				case "reservation" :
					require("{$ROOT}{$DS}controller{$DS}controllerReservation.php");
					break;	
				case "connexion" :
					require("{$ROOT}{$DS}controller{$DS}controllerConnexion.php");
					break;
				case "session" :

						require("{$ROOT}{$DS}controller{$DS}controllerSession.php");
						break;
		}
			
			
			?>					
