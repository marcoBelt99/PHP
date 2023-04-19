<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'db_test';

    // Connessione al DBMS
    $connessione = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    // Test
    if(!$connessione)
    {
        echo "Impossibile connettersi a MySQL: " . mysqli_connect_error() . PHP_EOL;
        echo "Codice di errore: " . mysqli_connect_errno() . PHP_EOL;
        exit(-1);
    }
    // echo "Connessione avvenuta con successo";

