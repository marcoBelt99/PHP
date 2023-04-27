<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Un saluto da PHP con Ajax</title>
</head>
<body>
    <?php 
    // Uso la funzione date() per individuare l'ora corrente e creo una stringa di saluto da inviare al client
    // con la stampa echo
     echo "Ciao, qui sul server sono le ore: " . date("H:i:s");
    ?>
</body>
</html>