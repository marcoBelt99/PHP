<?php
    include_once('connessione.php');
    
    // Recupero dei dati provenienti dal form e Sanificazione dell'input
    // E' buona norma 'filtrare' i valori provenienti dai form
    // la funzione trim() ripulisce tali valori da eventuali spaziin eccesso
    // la funzione mysqli_real_escape_string() permette di gestire i casi di escape che possono generare errori
    $nome = trim(mysqli_real_escape_string($connessione, $_POST["nome"])); 
    $cognome = trim(mysqli_real_escape_string($connessione,$_POST["cognome"])); // 
    $email = trim(mysqli_real_escape_string($connessione,$_POST["email"]));

    // Per evitare SQL injection, mai mettere i valori delle query come strigna, ma sempre dentro variaibili o parametri
    $strSQL = "INSERT INTO tab_utenti (nome, cognome, email) VALUES ('$nome', '$cognome', '$email')";
    $risultato = mysqli_query($connessione, $strSQL); // mysqli_query ritorna un valore booleano

    if(!$risultato) 
    {
        echo "Errore nella $query " . mysqli_error($connessione);
        exit;
    }
    else 
    {
        echo "Dati inseriti con successo! </br>";
        echo "Il record inserito ha ID: " . mysqli_insert_id($connessione); // Se mi serve prelevare l'id appena inserito per es) creare un record
        // collegato su un'altra tabella. Ritorna il valore 0 se non ho fatto un'operazione di INSERT (o UPDATE) oppure se non vi e' il campo di tipo contatore
        // nella tabella in uso

        // mysqli_free_result($risultato); // non funziona
    }
    
    mysqli_close($connessione);

    /** TODO:
     * - aggiungere dei controlli di validazione lato client con Javascript
     * - aggiungere poi controlli di validazione lato server in PHP 
     */
    
?>