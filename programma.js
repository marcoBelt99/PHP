
function controlloForm() {

    // Dichiarazione delle variabili
    var nome = document.forms["registrazione"]["nome"].value;
    var cognome = document.forms["registrazione"]["cognome"].value;
    var email = document.forms["registrazione"]["email"].value;

    if(nome == "")
    {
        alert("E' necessario inserire il proprio nome");
        return false;
    }
    else if(cognome == "") {
        alert("E' necessario inserire il proprio cognome");
        return false;
    }
    else if(email == "") {
        alert("E' necessario la propria email");
        return false;
    }
}