
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
                        /*page FAQ*/
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header"); 
/*queryselector : renvoie tous les élém du doc qui correspondent aux sélecteurs css sous forme d'objets
 note list : collection de noeuds */

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
     // to allow for the display of only one collapsed item at a time! : 
    
     const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
     if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
       currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
     }

    accordionItemHeader.classList.toggle("active"); //
// lorsque on clique sur accordion-header : on bascule la classe active

    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
      /*
      */
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});
                        
                        
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
/*utilisateur*/ 
$(document).ready(function(){
  //Menu Toggle Script
  $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
  });
  
  // For highlighting activated tabs
  $("#tab1").click(function () {
  $(".tabs").removeClass("active1");
  $(".tabs").addClass("bg-light");
  $("#tab1").addClass("active1");
  $("#tab1").removeClass("bg-light");
  });
  $("#tab2").click(function () {
  $(".tabs").removeClass("active1");
  $(".tabs").addClass("bg-light");
  $("#tab2").addClass("active1");
  $("#tab2").removeClass("bg-light");
  });
  $("#tab3").click(function () {
  $(".tabs").removeClass("active1");
  $(".tabs").addClass("bg-light");
  $("#tab3").addClass("active1");
  $("#tab3").removeClass("bg-light");
  });
  })