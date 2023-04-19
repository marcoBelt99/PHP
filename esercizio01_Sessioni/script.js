function validazioneForm() {
   
    // Recupero delle variabili in input
    var nome = document.forms["formInserimento"]["username"].value;
    var password = document.forms["formInserimento"]["password"].value;
    var voto = document.forms["formInserimento"]["voto"].value;
    var materia = document.getElementById("materia").value;
    var telefono = document.getElementById("telefono").value;

    // debug
    console.log(nome);
    console.log(password);
    console.log(voto);
    console.log(materia);

    // Controllo sugli input
    if(nome == "")
    {
        alert("E' necessario inserire il nome utente");
        return false;
    }
    if(password == "")
    {
        alert("E' necessario inserire la password");
        return false;
    }

    if(isNaN(voto) || voto < 1 || voto > 10) // isNaN()
    {
        alert("E' necessario inserire un voto valido");
        return false;
    }

    if(materia == "")
    {
        alert("E' necessario scegliere la materia");
        return false;
    }
    // Il telefono non lo rendo obbligatorio
    
    // Conferma ulteriore usando la funzione confirm()
    var risposta = confirm("Procedo con l'invio dei dati?");
    if(risposta == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}