<form action="index.php?controller=reservation&action=created&id_voiture=<?=$id_voiture?>" name="reservation" method="POST" enctype="multipart/form-data">
<fieldset>
<div>
    <label for="date_deb">Date de début de location*</label>
    <input type="datetime-local" id="date_deb" name="date_deb" value=""placeholder=""/>
</div>
<div>
    <label for="date_fin">Date de fin de location*</label>
    <input type="datetime-local" id="date_fin" name="date_fin" value=""placeholder=""/>
</div>
<div>
    <label for="message">Description*</label>
    <textarea name="message" id="message" cols="40" rows="3" required placeholder="Veuillez introduire votre demande"></textarea>
</div>
<button type="button" class="btn btn-success"><a href="index.php?controller=voiture&action=read&immatriculation=<?=$id_voiture?>" class="btn btn-success">Retour</a></button>
<button type="submit" class="btn btn-success">Valider Reservation</button>
	
</fieldset>
<
</form>