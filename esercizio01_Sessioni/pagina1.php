<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina 3</title>

     <!-- Includo i miei stili CSS-->
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    
    // Apro la sessione
    session_start();


    if($_SESSION["usernameSess"] != "")
    {
        echo "Bentornato utente " . $_SESSION["usernameSess"] . "<br>";
        echo "ID di sessione: " . session_id();
    }
    else
    {
        echo "Utente non riconosciuto!" . "<br>";
        echo "Torna alla pagina di <a href='form.html'>autenticazione</a>";
    }

    echo "<br>";

    
    // Gestione del voto
    if($_SESSION["votoSess"] != "")
    {
        if($_SESSION["votoSess"] >= 6) {
            // Stampa sufficiente in verde
            ?>
            <p class="sufficiente">Complimenti!</p>
            <?php
        }
        else
        {
            // Stampa insufficiente in rosso
            ?>
            <p class="insufficiente">Verica non superata. Ritenta</p>
            <?php
        }    
    }
    else
    {
        echo "Voto non valido. Errore" . "<br>";
        echo "Torna alla: <a href='form.html'>pagina precedente</a>";
    }
    
    ?>
</body>
</html>