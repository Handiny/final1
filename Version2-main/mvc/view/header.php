<!doctype html>
<html lang="fr">
  <head>
      <link rel="stylesheet" href="assets/style.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> <!--boxicons-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c3be74198.js" crossorigin="anonymous"></script> <!--pour insérer des icônes-->
    <title><?php echo$pagetitle;?></title>
  </head>
  <body> 
      <!--nav-->
<!--nav-->

<nav class="navbar navbar-expand-md navbar-light " id="haut">
        <!--boutton pour afficher l'élément groupé((menu + zone de rechereche pour les petits écrans--> 
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--end-boutton -->
        <!-- Groupement de zone de recherche + menu par Div (pour pouvoir les disparaître ensuite -->
        <div class="collapse navbar-collapse justify-content-between" id="nav"> <!--pour disparaitre et apparaitre selon la dimension-->
        <style>
          .logo{
          border-radius: 50%;
          height:100px; 
          width:100px;
          margin-left:200px;
          }
          .fin{
            display:flex;
            flex-wrap:nowrap;
            margin-left:600px
          }
          </style>
        <ul class="navbar-nav">
          
            <li class="nav-item d-flex " >
             <a class="nav-link text-white font-weight-bold bg-success px-3"href="index.php?controller=voiture&action=create">inscrire ma voiture</a>
            </li>
                
            <li class="nav-item dropdown"> <!--Menu déroulant-->
                <a class="nav-link text-white font-weight-bold px-3 dropdown-toggle"  data-toggle="dropdown" href="#" >Aide</a> <!--date-toggl="dropdown" : Bouton qui ouvre un menu déroulant-->
                <div class="dropdown-menu">
                    <a  class="dropdown-item" href="index.php?controller=faq">Une question ?</a>
                    <a class="dropdown-item"href="index.php?controller=comment">Comment ça marche?</a>
                    <a class="dropdown-item" href="index.php?controller=contact&action=create">Contactez-nous</a>
                </div>
            </li>
            <li class="logo">
          <a href="index.php?controller=home"><img src="assets/Images/logo.png" alt="logo" class="logo"/></a>
          </li>
          
            <div class="fin">
              <?php 
              if (!isset($_SESSION["id_utilisateur"])) {
                ?><li class="nav-item"><a class="nav-link text-white font-weight-bold px-3" href="index.php?controller=utilisateur&action=auth">Se connecter</a></li>
                <li class="nav-item"><a class="nav-link text-white font-weight-bold px-3" href="index.php?controller=utilisateur&action=create">S'inscrire</a></li><?php
              }
              else {?>
                <li class="nav-item"> <a href="index.php?controller=compte"><?php echo$_SESSION["nom_utilisateur"]?></a></li>
                <li class="nav-item"><a class="nav-link text-white font-weight-bold px-3" href="index.php?controller=utilisateur&action=deconnexion">Se Déconnecter</a></li><?php
              }
              ?>
            
            
            </div>
            </ul>
        
        
       </div>
      </nav>
      <script type="text/javascript">
      var nav = document.getElementById('haut');

       window.onscroll = function () {

         if(window.pageYOffset > 100){

          nav.style.position = "fixed";
          nav.style.top = 0;

          }else{
            // nav.style.position = "absolute";
            nav.style.position = 'relative'; //fixed
            nav.style.top = 100;
          }
       }
      </script>


      <!--end of nav-->

