
<!-- prop 2 -->
<style>
	.cont{
  display:flex;
  justify-content: center;
  margin-top:50px;
  margin-bottom: 100px;
}
.contbody{
	display:flex;
	flex-direction: column;
	align-items: center;
}
.tableauu{
	width: 400px;
	margin-bottom:40px;
}
.libelle{
	font-variant: small-caps;
    font-weight:bold;
}
</style>
<div class="container-fluid cont">
<div class="card mb-3 border-success" style="width: 1200px;">
  <div class="row g-0">
    <div class="col-md-7">
	<?php echo "<img src='assets/Images/".$u->getImage_voiture()."' class=' card-img-top' alt='Image indispo'>";?>
    </div>
    <div class="col-md-5">
      <div class="card-body contbody">
        <h5 class="card-title"><?php echo$u->getMarque()." ".$u->getModele();?></h5>
        <p class="card-text"><em><?php echo$u->getDescription()?></em></p>
		<table class="tableauu">
			<tr>
				<td class="libelle">Annee: </td>
				<td><?php echo$u->getAnnee()?> </td>
			</tr>
			<tr>
				<td class="libelle">Boite vitesse: </td>
				<td><?php echo$u->getBoitevitesse()?> </td>
			</tr>
			
			<tr>
				<td class="libelle">Kilomètrage :  </td>
				<td><?php echo$u->getKilometrage()?> </td>
			</tr>
			<tr>
				<td class="libelle">Puissance Fiscale : </td>
				<td><?php echo$u->getPuissance_fiscale()?> </td>
			</tr>
            <tr>
				<td class="libelle">Carburant : </td>
				<td><?php echo$u->getCarburant()?> </td>
			</tr>
			
			<tr>
				<td class="libelle">Date de validité du controle technique </td>
				<td><?php echo$u->getDate_validation_tech()?> </td>
			</tr>

			<tr>
				<td class="libelle">Prix de location (Dt) :  </td>
				<td><?php echo$u->getPrix_loc()?> </td>
			</tr>
		</table>
        <div class="card-body ">
		<?php 
              if (!isset($_SESSION["email"])) {
				  
             ?>
			 <a href="index.php?controller=voiture&action=read&immatriculation=<?=$immatriculation?>"onclick="return alert('Merci de se connecter d\'abord !');" class="btn btn-success">Réserver</a> 
	         <a href="index.php?controller=voiture&action=readAll" class="btn btn-success">Retour</a>
                <?php
              }
              else {?>
               <a  href="index.php?controller=reservation&action=create&immatriculation=<?=$immatriculation?>" class="btn btn-success">Réserver</a>
	           <a href="index.php?controller=voiture&action=readAll" class="btn btn-success">Retour</a><?php
              }
              ?>
	
  </div>
      </div>
	  
    </div>
  </div>
</div>
</div>