<?php 

// Lettura e salvataggio parametri di connessione da file di configurazione
$parametri = parse_ini_file("config.ini");

// Creazione della connessione. CREO OGGETTO
$connessione = new mysqli($parametri['database_hostname'], $parametri['database_username'], $parametri['database_password'], $parametri['database_name']);

// Verifico l'eventuale successo della connessione
if ($connessione->connect_errno) // alternativa: if(!($connessione->mysqli_connect($db_host, $db_user, $db_password, $db_name)) {}
{
    echo "Impossibile connettersi a MySQL: " . $connessione->connect_error;
    exit;
}

$strSQL = "INSERT INTO tab_utenti (nome, cognome) VALUES ('Armando','Cavallari')";

if($connessione->query($strSQL))
{
    // Ottengo il valore della chiave primari (del campo autoincrementato)
    $ID = $connessione->insert_id;
    echo "Dati inseriti con successo!<br>";
    echo "Il record inserito ha ID: " . $ID;
}
else
    echo "Errore nella query: " . $strSQL . " - " . $connessione->error;

// Chiusura della connessione
$connessione->close();
?>