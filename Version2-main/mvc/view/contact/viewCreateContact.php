
<section class="contact">

    <div class="content">
        <h2>Vous avez des questions ?</h2>
        <p>Ou simplement envie de nous contacter ?<strong> Vous êtes pile au bon endroit!</strong></p>

    </div>

    <!--Container -->
    <div class="container">
        <!--Box1-->
      <div class="contactInfos">
        <div class="box">
             <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
             <div class="text">
                  <h3>Adresse</h3>
                  <p>1048 Rue de Palmariers , Lac </p>
             </div>
        </div>
    
        <!--Box2-->
        <div class="box" >
            <div class="icon" ><i class="fas fa-phone-square-alt"></i></div>
            <div class="text" >
                 <h3 class="succes">Phone</h3>
                 <p>+21625847932</p>
            </div>
        </div>
        <!--Box3-->
        <div class="box">
            <div class="icon"><i class="fas fa-envelope-square"></i></div>
            <div class="text">
                 <h3 >Email</h3>
                 <p>Handiny@yahoo.com</p>
            </div>
        </div>
      </div>
    
        <!--Formulaire de contact-->
        <div class="">
        <form action="index.php?controller=contact&action=created" method="POST">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2" id="bodyy">
                                    <h3><i class="fa fa-envelope "></i> Contactez-nous</h3>
                                
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="nom_prenom" placeholder="Nom et Prénom" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="email" placeholder="E-mail" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Message" name="message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Envoyer" class="">
                                </div>
                            </div>

                        </div>
                    </form>
                   


                </div>
	</div>
</div>
        </div>


    </div>

</section>
 