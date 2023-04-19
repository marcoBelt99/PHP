<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina 2</title>
</head>
<body>
    <?php
    // Apro la sessione
    session_start();

    // Recupero dati dal form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $materia = $_POST["materia"];
    $voto = $_POST["voto"];

    // test password
    if($password == "cambiala")
    {
        $_SESSION["usernameSess"] = $username;
        $_SESSION["materiaSess"] = $materia;
        $_SESSION["votoSess"] = $voto;

        echo "Utente " . $_SESSION["usernameSess"] . " collegato al sistema!" . "<br>";
        // Vado ad una pagina nuova
        echo "PROCEDI <a href='pagina1.php'>QUI</a>";
    }
    else
    {
        echo "Utente " . $username . " non riconosciuto!" . "<br>";
        // Torno alla pagina precedente
        echo "Torna alla pagina di <a href='form.html'>autenticazione</a>";
    }

    ?>
</body>
</html>