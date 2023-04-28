<?php 
 // Questo file ha il compito di prelevare in tempo reale i dati dal database MySQL, 
 // trasformarli in formato JSON e restituirli al browser che li elaborerà così come farebbe con un 
 // altro file qualsiasi JSON già presente sul file system del server web. Ovviamente, la grande potenza
 // di questa soluzione che fa uso del database è la possibilità di rendere estremamente elastico il 
 // dialogo tra browser e server web


// Oltre ad impostare la codifica UFT-8, header(...) predispone una specifica intestazione di tipo JSON a beneficio del browser che capità che tipo di dati
// deve gestire
header("Content-Type: application/json; charset=UTF-8");
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'db_test';

$connessione = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Test di connessione
if(mysqli_connect_error())
{
    echo "Impossibile connettersi a MySQL: " . mysqli_connect_error();
    exit;
}

// Query
$strSQL = "SELECT nome, cognome, email FROM tab_utenti";
$risultato = mysqli_query($connessione, $strSQL);

// Test presenza risultati
if($risultato)
{
    // Ciclo sul risultato
    $out = "[";
    while($riga = mysqli_fetch_array($risultato, MYSQLI_ASSOC)) // Scorro sui dati restituiti
    // Con tali dati costruisco l'array JSON fatto di tanti oggetti, ognuno dei quali rappresenta un utente del mio archivio
    {
        if($out != "[")
        {
            $out .= ","; // se non siamo all'inizio, dobbiamo aggiungere una nuova virgola
        }
        $out .= '{"nome":"' . $riga["nome"] . '",';
        $out .= '"cognome":"' . $riga["cognome"] . '",';
        $out .= '"email":"' . $riga["email"] . '"}';
    }
    $out .= "]";
}
else 
{
    $out = "[]";
}

echo $out;
mysqli_close($connessione);


?>