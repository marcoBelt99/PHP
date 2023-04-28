<?php 

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
// $strSQL = "SELECT nome, cognome, email FROM tab_utenti WHERE ";

$strSQL = " SELECT count(*) AS abitanti_ferrara FROM tab_utenti WHERE email LIKE '%unife%' UNION
            SELECT count(*) AS abitanti_bologna FROM tab_utenti WHERE email LIKE '%unibo%'UNION
            SELECT count(*) AS abitanti_padova FROM tab_utenti WHERE email LIKE '%unipd%';";

$risultato = mysqli_query($connessione, $strSQL);

// Test presenza risultati
if($risultato)
{
    // Ciclo sul risultato
    $rows = array();

    $out = "[";
    while($riga = mysqli_fetch_array($risultato, MYSQLI_ASSOC)) // Scorro sui dati restituiti
    // Con tali dati costruisco l'array JSON fatto di tanti oggetti, ognuno dei quali rappresenta un utente del mio archivio
    { 
        $out .= '{"abitanti":"' . $riga["abitanti_ferrara"] . '"}"';
        // $rows[] = $riga;
    }
    $out .= "]";
}

print json_encode($rows); // debug
echo $out;
//echo $rows;
// json_encode($rows);

mysqli_close($connessione);


?>