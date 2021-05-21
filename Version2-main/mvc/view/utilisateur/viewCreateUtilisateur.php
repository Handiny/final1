<script type="text/javascript">
 
  /*page connexion*/
  function controleMDP(mdp){
	if(mdp.value.length<8)
	{
		alert('le champ motdepasse doit contenir au moins 8 caracteres');
		mdp.focus();
		return false
	}
	if(!mdp.value.match(/[0-9]/) )
	{
		alert('le mot de passe doit contenir au moins un chiffre!');
		return false;
	}
	if  (!mdp.value.match(/[A-Z]/) ) 
	{alert('le mot de passe doit contenir au moins une lettre majuscule!');
		return false;
	}
		if  (!mdp.value.match(/[^a-zA-Z0-9]/) ) 
	{alert('le mot de passe doit contenir au moins un caractere special!');
		return false;
	}
	
	
	return true;
	
}
function validationInscription(mdp1,mdp2)
{ test1=controleMDP(mdp1);
  test2=controleMDP(mdp2);
  if(!test1|| !test2)
  { alert('le champ motdepasse doit contenir au moins 8 caractères,au moins une lettre majuscule,au moins une lettre miniscule, au moins un chiffre  et au moins un caractere speciale!');
    return false;
	  
  }
  if(mdp1.value!= mdp2.value)
  {
	  alert('les 2 champs ne sont pas identiques');
	  return false;
  }
  
  
}
  
</script>

<div class="container insccontainer1"></div>
<div class="container insccontainer2">
<hr>
<div class="card bg-light">
<article class="card-body mx-auto inscriarticle" >
	<h1 class="card-title mt-3 text-center h1insc"><i class="fab fa-odnoklassniki-square icone"></i><strong>Inscription</strong></h1>
	<!--<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>-->
	<form action="index.php?controller=utilisateur&action=created"name="ins" class="inscription" method="post" onsubmit="return validationInscription(document.ins.mdp,document.ins.cmdp)">
       
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nom_utilisateur" class="form-control" placeholder="Nom" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="E-mail" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<!--
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+216</option>
		    <option value="1">+213</option>
		    <option value="2">+212</option>
		    <option value="3">+218</option>
		</select>-->
    	<input name="tel" class="form-control" placeholder="Tel" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" name="mdp" id="imdp">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password" name="cmdp" id="cmdp">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

</div>
