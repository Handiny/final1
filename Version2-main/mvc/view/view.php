<!doctype html>
<html lang="fr">
  <head>
      <link rel="stylesheet" href="../assets/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title><?php echo $pagetitle; ?></title>
  </head>

<?php

//require_once("{$ROOT}{$DS}view{$DS}header.php");
require_once($ROOT.$DS."view".$DS."header.php");

// Si $controleur='voiture' et $view='readAll',
// alors $filepath=".../view/voiture/"
//       $filename="viewReadAllVoiture.php";
// et on charge '.../view/voiture/viewReadAllVoiture.php'
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}"; 

// détermine le chemin de la vue en fonction du controller qu'on utilise
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; // détermine le nom du fichier
require_once($filepath.$filename);
require_once($ROOT.$DS."view".$DS."footer.php");
//require_once("{$ROOT}{$DS}view{$DS}footer.php");

?>
 <script src="https://kit.fontawesome.com/9c3be74198.js" crossorigin="anonymous"></script> <!--pour insérer des icônes-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
