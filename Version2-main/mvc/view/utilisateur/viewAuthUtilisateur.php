<div class="container insccontainer1"></div>
<div class="container insccontainer2">
<hr>
<div class="card bg-light">
<article class="card-body mx-auto inscriarticle" >
	<h2 class="card-title mt-3 text-center h1insc"><i class="fab fa-odnoklassniki-square icone"></i><strong>Connexion</strong></h2>
	<br/>
	<form action="index.php?controller=utilisateur&action=connexion"name="ins" class="" method="post" onsubmit="return validationInscription(document.ins.mdp,document.ins.cmdp)">
       
	<div class="form-group input-group">
		
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="E-mail" type="email">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    	
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Mot de passe" type="password" name="mdp" id="imdp">
    </div> <!-- form-group// -->
                                         
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
    </div> <!-- form-group// -->      
    <p class="text-center">Pas encore de compte ?  <a href="inscription.html">Inscrivez-vous</a> </p>                                                                 
</form>
<p>
    <input type="checkbox" name="remember" id="remember">
    <label for="checkbox">Se rappeler de moi
       <!-- début du lien MDP oublié  -->
       <a href="">Mot de passe oublié</a>
     </label>	
 </p>
 
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

</div>