
        <section class="section11"></section>
        <section id="section22">
        <form action="" method="post" >
            <div class="page" id="page1">
                <h1>Identité</h1>
                
                 <div>
                     <label for="nom_prenom">Nom et Prénom*</label>
                     <input type="text" id="nom_prenom" name="nom_prenom" placeholder=""/>
                 </div>
                <div>
                     
                   <label for="email">Adresse email* </label>
                   <input  name="email" type="email" id="email" required/> 
                </div>


              <div>
              <label for="tel">Téléphone (mobile de préférence) *</label>
              <input type="tel" id="tel" name="tel" pattern="[0-9]{2}[0-9]{3}[0-9]{3}"required>
              </div>

              <button type="button" class="Bouton1 btn-lg btn-outline-success btn-lg" id="bt" >Suivant</button> <!--type button et pas submit car je vais passer à la page suivante , je vais pas envoyer toutes les informations que dans la dernière page!!!-->
            </div>
          
            <div class="page" id="page2">
              <h1>Prise en charge</h1>
               <div>
                   <label for="adresse_codepostal">Adresse et Code Postal*</label>
                   <input type="text" id="adresse_codepostal" name="adresse_codepostal" placeholder="" required/>
               </div>

              <div>
                  <label for="duree_service">Durée du service(heures/jours)*</label>
                  <input type="text" id="duree_service" name="duree_service" required placeholder="Exemple: 1jour">
              </div>

               
                 <div>
                  
                  <label for="demande">Décrivez-nous votre demande :</label>
                  <br/>
                  <textarea name="demande" id="demande" rows="4" cols="80"></textarea>
                 </div>
                 <button type="button" class="Bouton2 btn-lg btn-outline-success btn-lg ">Précedente</button>
                 <button type="button" class="Bouton1 btn-lg btn-outline-success btn-lg">Suivant</button>
              </div>
              
              <div class="page" id="page3">
                  <h1>Horaire</h1>
                  <div>
                   <label for="date_prise_charge">Date de prise en charge par le chauffeur *</label>
                   <input type="date" id="date_prise_charge" name="date_prise_charge" value=""/>
                  </div>
                  
                  <button type="button" class="Bouton2 btn-lg btn-outline-success btn-lg  ">Précédente</button>
                  <button type="submit" class="btn-lg btn-outline-success btn-lg">Terminer</button>
                     
          <div>
          <script type="text/javascript">
/*Page Demander chauffeur*/


//1) récupérer les informations dont on a besoin 
// On va chercher les différents élements de notre page
const pages = document.querySelectorAll(".page")
const headerh1 =document.querySelector(".section11")
const nbPages=pages.length //nombre de pages de formulaire
 console.log(nbPages) 
//On attend le chargement de la page
let pageActive=1 //pour savoir quelle page je vais l'activer et ensuite je mets la classe active...
window.onload=()=>{
    //on affiche la 1ère page de formulaire
    document.querySelector(".page").style.display="initial"
    //on affiche les numéros des pages dans la section1
    //on parcourt la liste des pages
    pages.forEach((page,index)=> { /* synthaxe : données.foreach(donnée, index)*/
     // j'ai besoin de  l'index pour récupérer chaque page et activer après   
    //on crée l'élement "numéro de page(le rang avec num)"
    let element=document.createElement("div") // créqtion de l'élement virtuellement dans la mémoire
    element.classList.add("page-num")
    element.id="num" +(index + 1)
    if(pageActive===index + 1)
    {
        element.classList.add("active") //ajouter une classe que je l'appelle active
        //pour mettre la page active
    }
    element.innerHTML=index + 1
    console.log(element)
     headerh1.appendChild(element);
    
    
    
    })
}


//cette fonction fait avancer le formulaire d'une page
let boutons=document.querySelectorAll(".Bouton1") //pour chercher tous les bouttons(suivant) de la page
for(let buton of boutons){
    buton.addEventListener("click",pagesuivante) //Joindre un événement de clic au document. Lorsque l'utilisateur clique sur un boutton

}
//cette fonction retourner le formulaire d'une page en arrière
let btns=document.querySelectorAll(".Bouton2") //pour chercher tous les bouttons de la page
for(let bouton of btns){
    bouton.addEventListener("click",pageprecedente) //Joindre un événement de clic au document. Lorsque l'utilisateur clique sur un boutton

}
function pagesuivante()
{

//On masque toutes les pages
for(let page of pages){
    page.style.display="none"
}
//On affiche la page suivante
this.parentElement.nextElementSibling.style.display="initial"//this:c'est le boutton sur lequel j'ai cliqué
                      //ensuite je cherche son parent (la div parente)
                      //ensuite je descends dans la div suivante
//On désactive la page active
document.querySelector(".active").classList.remove("active")

//On incrémentre pageActive
pageActive++
//on active le nouveau numéro
document.querySelector("#num"+pageActive).classList.add("active")
}
function pageprecedente()
{

//On masque toutes les pages
for(let page of pages){
    page.style.display="none"
}
//On affiche la page précédente
this.parentElement.previousElementSibling.style.display="initial"//this:c'est le boutton sur lequel j'ai cliqué
                      //ensuite je cherche son parent (la div parente)
                      //ensuite je descends dans la div suivante
                      //On désactive la page active
document.querySelector(".active").classList.remove("active")

//On incrémentre pageActive
pageActive--
//on active le nouveau numéro
document.querySelector("#num"+pageActive).classList.add("active")
}
            
            </script>
        
                

       
              

        </form>
    </section>
    
     

     