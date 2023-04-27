<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'db_test';

    // Creazione della connessione. CREO OGGETTO
    $connessione = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Verifico l'eventuale successo della connessione
    if($connessione->connect_errno) // alternativa: if(!($connessione->mysqli_connect($db_host, $db_user, $db_password, $db_name)) {}
    {
        echo "Impossibile connettersi a MySQL: " . $connessione->connect_error;
        exit;
    }

    // ...

    $connessione->close();

?>