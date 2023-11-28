// toggle nav sur hamburger
let nav = document.querySelector("nav");  
let hamburger =  document.querySelector("#hamburger");
hamburger.addEventListener("click", () => {
        nav.classList.toggle("open");
});

// toggle nav sur liens
let liens = document.querySelectorAll(".liens");
liens.forEach((liens) => {
    liens.addEventListener("click", () => {
    nav.classList.toggle("open");
    })    
});
 
// fonction pour vérifier le formulaire de contact
function validate() { 
    // récupération des forms
    let name = document.querySelector("#name").value; 
    let subject = document.querySelector("#subject").value; 
    let email = document.querySelector("#email").value; 
    let message = document.querySelector("#message").value; 
    let error_message = document.querySelector("#error_message"); 
    error_message.style.padding = "10px"; 
  
    let errors = []; 

    // vérification nom
    if (name.length < 3) { 
        errors.push("Veuillez entrer un nom valide.");
    } 
    // vérification sujet
    if (subject.length < 5) { 
        errors.push("Veuillez entrer un sujet valide.");
    }
    // vérification du mail
    if (email.indexOf("@") == -1 || email.length < 6) { 
        errors.push("Veuillez entrer une adresse mail valide.");
    } 
    // vérification du message
    if (message.length <= 30) { 
        errors.push("Veuillez écrire un message de plus de 30 caractères.");
    } 
    // envoi du message en fonction des erreurs
    if (errors.length > 0) { 
        error_message.textContent = errors.join(" "); 
        return false;} 
    else { 
        alert( 
            "Votre message a été envoyé !"); 
        return true;
    }
}
