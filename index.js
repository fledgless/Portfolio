function openMenu() {
    let nav = document.querySelector("nav")
    nav.classList.toggle("open")
}
 
function validateForm() {
    let name = document.forms["contactForm"]["name"].value;
    let email = document.forms["contactForm"]["email"].value;
    let message = document.forms["contactForm"]["message"].value;
    let error = "";

    if (name == "") {
        error += "Please enter your name.\n";
    }

    if (email == "") {
        error += "Please enter your email address.\n";
    } else if (!validateEmail(email)) {
        error += "Please enter a valid email address.\n";
    }

    if (message == "") {
        error += "Please enter a message.\n";
    }

    if (error != "") {
        alert(error);
        return false;
    }
}

function validateEmail(email) {
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}
