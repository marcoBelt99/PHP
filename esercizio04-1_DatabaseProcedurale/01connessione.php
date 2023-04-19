<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'db_test';

    // Connessione al DBMS
    $connessione = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    // Test
    if(mysqli_connect_error())
    {
        echo "Impossibile connettersi a MySQL: " . mysqli_connect_error() . PHP_EOL;
        echo "Codice di errore: " . mysqli_connect_errno() . PHP_EOL;
    }

    echo "Connessione avvenuta con successo";

    // Chiusura della connessione
    mysqli_close($connessione);