
  <body> 
  
      <!--SECTION 1-->
      <section class="block1">
          <div class="container-fluid"> <!--occuper tout le largeur de navigateur-->
              <div class="row" >
                 <div class="col-sm-12 text-center">
                    <h1 class="text-center">Louez une voiture adaptée <i class="fas fa-wheelchair text-light"></i></h1>
                    <h2 class="text-center"> à un particulier ou un professionnel près de chez vous au meilleur prix</h2>
                    <button type="button" class="btn btn-outline-secondary btn-lg " id="bout"><a href="index.php?controller=voiture&action=readAll">louez maintenant !</a></button>
                </div>
              </div>
              <style>
    .stickyChauffeur{
          display: flex;
          flex-direction: column;
          align-items: center;
          box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
          height: 200px;
          width: 300px;
          background-color: #E8E8E8;
          box-shadow: #ffeb9a;
          border: solid 0.2px #E8E8E8;
          position: sticky;
          margin-right: 20px;
          margin-left: 1150px;
          border-radius: 5px 5px 5px 5px;
          opacity: 0.75;
          font-family: 'Satisfy', cursive;
          text-align: center;
        }
        
      </style>
      <div class="stickyChauffeur">
      <h4><strong>Besoin d'un chauffeur?</strong></h4>
      <p>
      Décrivez-nous votre besoin via ce formulaire et nous mettrons à votre disposition les meilleurs candidats possibles! 
      </p>
      <a href="index.php?controller=chauffeur&action=create"><i class='bx bx-envelope bx-tada bx-sm'  style='color:#164313' ></i></a>
      </div>
      <script>
        stickyElem =
            document.querySelector(".stickyChauffeur");
  
        /* Gets the amount of height
        of the element from the
        viewport and adds the
        pageYOffset to get the height
        relative to the page */
        currStickyPos = 
          stickyElem.getBoundingClientRect().top + window.pageYOffset;
  
        window.onscroll = function() {
  
            /* Check if the current Y offset
            is greater than the position of
            the element */
            if (window.pageYOffset > currStickyPos) {
                stickyElem.style.position = "fixed";
                stickyElem.style.top = "0px";
            } else {
                stickyElem.style.position = "relative";
                stickyElem.style.top = "initial";
            }
        }
    </script> 
          </div>
      </section >
      <!--END SECTION1-->
      <!--SECTION 2-->
      
	  
	  
      <section class="block2">
      <div class="container-fluid " >
          <div class="row">
              <h3 id="h3">Pourquoi louer une voiture adaptée sur <span>Handiny?</span></h3>
          
                  <div class="container" id="cont2">
                    <div class="row">
                      <div class="col-md-4">
                        <img src="assets/Images/solidaire.png" alt="">
                        <h2 class="c">Une communauté solidaire</h2>
                        <p> Rencontrez des propriétaires concernés par la mobilité, près de chez vous et prêts à vous rendre service !</p>
                      </div>
                      <div class="col-md-4">
                        <img src="assets/Images/chere.png" alt="">
                        <h2 class="c">La solution la moins chère</h2>
                        <p>Jusqu'à 50% de réduction. Si vous trouvez moins cher ailleurs, nous vous remboursons la différence !</p>
                        
                      </div>
                      <div class="col-md-4">
                        <img src="assets/Images/Assurance.png" alt="">
                        <h2 class="c">Assurance tous risques</h2>
                        <p>La MAIF assure le véhicule du propriétaire et le locataire pendant toute la durée de la location</p>
                       
                      </div>
                    </div>
                    
            
                  </div> 

              </div>

          </div>

      </div>
      </section>

      <!--END SECTION2-->
      <section class="p-sm-5 p-2 " id="block3">
        <div class="container-fluid">
          <div class="row mb-4">
            <div class="col">
              <h2 class="qlq">Quelques exemples de voitures disponibles sur Handiny</h2>
              
            </div>
          </div>
          
      
          <!-- END OF TITLE -->
          
          <div class="row">
            <div class="col-lg-4 col-sm-10 mx-auto mb-2">
              <div class="card">
                <img src="assets/Images/citroen.jpeg" class="card-img-top" />
                <div class="card-body">
                  <div class="card-tile">
                    <h3 class="text-muted"> <i class="fas fa-car-side"></i> Citroen Berlingo</h3>
                  </div>
                  <div class="card-subtitle">
                    <p class="text-muted lead">
                    
                    A partir de <strong>180DTN</strong>
                    <br>
                      <button type="button" class="btn btn-outline-success">Voir Plus</button>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto mb-2">
              <div class="card">
                <img src="assets/Images/peugeot.jpeg" class="card-img-top" />
                <div class="card-body">
                  <div class="card-tile">
                    <h3 class="text-muted"> <i class="fas fa-car-side"></i> Peageot Partner</h3>
                  </div>
                  <div class="card-subtitle">
                    <p class="text-muted lead">
                        A partir de <strong>200DTN</strong>
                    <br>
                       <button type="button" class="btn btn-outline-success">Voir Plus</button>
                    </p>
                  </div>
    
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto mb-2">
              <div class="card">
                <img src="assets/Images/Fiat.jpeg" class="card-img-top" />
                <div class="card-body">
                  <div class="card-tile">
                    <h3 class="text-muted"> <i class="fas fa-car-side"></i> Fiat Ducato</h3>
                  </div>
                  <div class="card-subtitle">
                    <p class="text-muted lead">
                    A partir de <strong>110DTN</strong>
                    <br>
                      <button type="button" class="btn btn-outline-success">Voir Plus</button>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto mb-2">
              <div class="card">
                <img src="assets/Images/berlingo.jpg" class="card-img-top" />
                <div class="card-body">
                  <div class="card-tile">
                    <h3 class="text-muted"><i class="fas fa-car-side"></i> Berlingo</h3>
                  </div>
                  <div class="card-subtitle">
                    <p class="text-muted lead">
                    A partir de <strong>210DTN</strong>
                    <br>
                      <button type="button" class="btn btn-outline-success">Voir Plus</button>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-10 mx-auto mb-2">
              <div class="card">
                <img src="assets/Images/Kia.jpg" class="card-img-top" />
                <div class="card-body">
                  <div class="card-tile">
                    <h3 class="text-muted"><i class="fas fa-car-side"></i> Kia</h3>
                  </div>
                  <div class="card-subtitle">
                    <p class="text-muted lead">
                    A partir de <strong>100DTN</strong>
                    <br>
                      <button type="button" class="btn btn-outline-success">Voir Plus</button>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-10 mx-auto mb-2">
              <div class="card">
                <img src="assets/Images/reno.jpeg" class="card-img-top" />
                <div class="card-body">
                  <div class="card-tile">
                    <h3 class="text-muted"><i class="fas fa-car-side"></i> Renault Kangoo</h3>
                  </div>
                  <div class="card-subtitle">
                    <p class="text-muted lead">
                         A partir de <strong>130DTN</strong>
                    <br>
                        <button type="button" class="btn btn-outline-success">Voir Plus</button>
                    </p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
          
        </div>

        </section>
  <!--section3-->
  
  <!-- END OF TEAM -->
 

