function validazione() {

    // Prelevo gli elementi da analizzare e li salvo in delle variabili
    var dataFattura = document.getElementById("dataFattura").value;
    console.log(dataFattura); // debug
    var quantita = document.getElementById("quantita").value;
    console.log(quantita); // debug
    var prezzoUnitario = document.getElementById("prezzoUnitario").value;
    console.log(prezzoUnitario); // debug

    // Mi assicuro che ogni singola variabile rispetti le mie condizioni
    if(dataFattura == null || dataFattura == "")
    {
        console.log("La data fattura deve essere insertia!!!");
        alert("La data fattura deve essere inserita");
        return false;
    }

    if(quantita == null || quantita == "" || quantita <= 0) {
        alert("Inserisci una quantita' valida (maggiore di 0)");
        return false;
    }

    if( prezzoUnitario == null || prezzoUnitario == "" || prezzoUnitario <= 0) {
        alert("Inserisci un prezzo per unita' valido (maggiore di zero)");
        return false;
    }

    return true;
}