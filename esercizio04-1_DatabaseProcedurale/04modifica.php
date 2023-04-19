<?php
    include_once('connessione.php');
    
    $nome = "Marietto";
    $nuovoNome = "mario";
    // $nuovoNome = trim($nuovoNome);

    // Per evitare SQL injection, mai mettere i valori delle query come strigna, ma sempre dentro variaibili o parametri
    $strSQL = "UPDATE tab_utenti SET nome = '$nuovoNome' WHERE nome = '$nome'";
    $risultato = mysqli_query($connessione, $strSQL); // mysqli_query ritorna un valore booleano

    if(!$risultato) 
    {
        echo "Errore nella $query " . mysqli_error($connessione);
        exit;
    }
    else 
    {
        echo "</br>Records  modificati: " . mysqli_affected_rows($connessione); // Ottengo il numero di righe coinvolte
        // funziona anche con la INSERT e la DELETE
    }
    
    mysqli_close($connessione);

?>