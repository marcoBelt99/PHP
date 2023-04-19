<?php
    # inclusione del file che contiene le istruzioni per la connessione al DB
    /* La include_once mi permette di usare le variabili definite dentro al file di cui fa riferimento */
    include_once('connessione.php');
    
    $sql = "SELECT nome, cognome, email FROM tab_utenti";
    $risultato = mysqli_query($connessione, $sql); // la mysqli_query ritorna un valore booleano

    if($risultato) // il valore di $risultato sara' un recordset, ovvero un insieme di record
    {
        // Ciclo sul recordset. (fetch vuol dire "andare a prendere")
        /*while($riga = mysqli_fetch_array($risultato, MYSQLI_NUM)) // la mysqli_fetch_array ad ogni iterazione mi ritorna un record. 
        // MYSQLI_NUM forza l'array che contiene i risultati ad essere di tipo numerico
        {
            echo "Nome: " . $riga[0] . " Cognome: " . $riga[1] . "</br>";
        }
        */
        while($riga = mysqli_fetch_array($risultato, MYSQLI_ASSOC)) // MYSQLI_ASSOC forza l'array di risultati ad essere associativo
        // quindi non ragiono con indici numerici come prima, ma con i nomi dei campi. Questo porta a maggior manutenibilita'
        {
            echo "Nome: " . $riga["nome"] . " Cognome: " . $riga["cognome"] . "</br>";
        }
        echo "Numero record restituiti: " . mysqli_num_rows($risultato); 
        mysqli_free_result($risultato); // libero la memoria occupata dal recordset utilizzato per prelevare i dati di mio interesse
    }
    else {
        echo "Errore nella query!";
    }

    mysqli_close($connessione);

    /** La costante MYSQLI_BOTH permette di usare entrambi gli indici sia posizionali (numerici) che associativi, anche se non 
     *  ha molto senso.
     * TODO: 
     *          mysqli_fetch_row($risultato) == mysqli_fetch_array($risultato, MYSQLI_NUM)
     *          mysqli_fetch_assoc($risultato) == mysqli_fetch_array($risultato, MYSQLI_ASSOC) 
    */
?>