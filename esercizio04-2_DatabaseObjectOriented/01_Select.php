<?php

// Lettura e salvataggio parametri di connessione da file di configurazione
$parametri = parse_ini_file("config.ini");

// Debug.Sto lavorando con un array associativo
/* foreach ($parametri as $p => $p_value) {
    echo "Key=" . $p . ", Value=" . $p_value;
    echo "<br>";
}

// print_r($parametri);

*/



// Creazione della connessione. CREO OGGETTO
$connessione = new mysqli($parametri['database_hostname'], $parametri['database_username'], $parametri['database_password'], $parametri['database_name']);

// Verifico l'eventuale successo della connessione
if ($connessione->connect_errno) // alternativa: if(!($connessione->mysqli_connect($db_host, $db_user, $db_password, $db_name)) {}
{
    echo "Impossibile connettersi a MySQL: " . $connessione->connect_error;
    exit;
}

// Operazioni SQL
$strSQL = "SELECT * FROM tab_utenti";
$risultato = $connessione->query($strSQL);
if ($risultato) {
    while ($riga = $risultato->fetch_assoc())
        echo "Nome: " . $riga["nome"] . " Cognome: " . $riga["cognome"] . "<br>";
    echo "Numero di record restituiti: " . $risultato->num_rows;
} else
    echo "Spiacente, nessun valore restituito";

// Lo script dovrebbe automaticamente liberare la memoria e chiudere la connessione a MySQL. Lo forzo comunque
$risultato->free();

unset($parametri);

// Chiusura della connessione
// $connessione->close();
