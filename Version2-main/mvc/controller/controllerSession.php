<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php");
session_start();
class Session extends ModelUtilisateur{
$bdd = maConnexion();
$table='utilisateurs';
$bdd=Model::$pdo;
$table='utilisateurs';


if(isset($_REQUEST["email"]) && !(empty($_REQUEST["email"])))
{
	$login=$bdd->quote($_REQUEST["email"]);
	
}
else
{
	die("ajouter votre login !!!");
}

if(isset($_REQUEST["mdp"]) && !(empty($_REQUEST["mdp"])))
{
	$pass=$bdd->quote(md5($_REQUEST["pass"]));
}
else
{
	die("donner votre mot de passe  !!!");
}


$req="select * from $table where user=$login and pass=$pass ";

$reponse = $bdd->query($req) or die ($bdd->errorInfo()[2]);
$nb=$reponse->rowCount();

if($nb==0)
{
	header("location: ../erreur.php");
}
else
{
	$ligne=$reponse->fetchObject();
	
	if($ligne->role == 1)
	{
		$_SESSION['role']=1;
		$_SESSION['nom']=$ligne->user;
		header("location: ../admin/admin.php");
		exit;
	
	}
	
	else
	{
		$_SESSION['role']=2;
		$_SESSION['nom']=$ligne->user;
		header("location: ../simple/page1.php");
		exit;
		
	}
}





?>