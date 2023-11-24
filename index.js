function openMenu() {
    let nav = document.querySelector("nav");
    nav.classList.toggle("open"); 
}
 
// fonction pour vérifier le formulaire de contact
function validate() { 
    // récupération des forms
    let name = document.getElementById("name").value; 
    let subject = document.getElementById("subject").value; 
    let email = document.getElementById("email").value; 
    let message = document.getElementById("message").value; 
    let error_message = document.getElementById("error_message"); 
    error_message.style.padding = "10px"; 
  
    let errors = []; 

    // vérification nom
    if (name.length < 3) { 
        errors.push("Veuillez entrer un nom valide");
    } 
    // vérification sujet
    if (subject.length < 5) { 
        errors.push("Veuillez entrer un sujet valide");
    }
    // vérification du mail
    if (email.indexOf("@") == -1 || email.length < 6) { 
        errors.push("Veuillez entrer une adresse mail valide");
    } 
    // vérification du message
    if (message.length <= 30) { 
        errors.push("Veuillez écrire un message de plus de 30 caractères");
    } 
    // envoi du message en fonction des erreurs
    if (errors.length > 0) { 
        error_message.innerHTML = 
            errors.join("<br>"); 
        return false;} 
    else { 
        alert( 
            "Votre message a été envoyé !"); 
        return true;
    }
}