<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'db_test';

    // Creazione della connessione. CREO OGGETTO
    $connessione = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Verifica della connessione
    if($connessione->connect_errno)
    {
        echo "Impossibile connettersi a MySQL: " . $connessione->connect_error;
        exit;
    }

    // ...

    $connessione->close();

?>