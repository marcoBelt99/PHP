<?php

/** Lettura del contenuto di un file di testo sul server.
 *  Uso queste informazioni per personalizzare alcune parti del codice HTML
 */
$righe_config = []; // array

//apertura del file in lettura
// La '@' davanti alla fopen() serve per delegare il programmatore nella gestione
// di eventuali warining
$file = @fopen("00_config.ini", "r");

// controllo corretta apertura del file
if($file)
{
    // ciclo di lettura
    while ($riga_letta = fgets($file))
        $righe_config[] = $riga_letta; // la aggiungo in fondo all'aray delle righe

    // chiusura del file
    fclose($file);
}
else
{
    // Il comando die() serve per bloccare l'esecuzione di uno script in maniera istantanea
    // scrivendo un eventuale messaggio per l'utente
    die("Impossibile aprire il file di configurazione.");
    // E' opportuno ritornare ad una pagina di index o in un'altra
    // Per poter leggere il messaggio della die() aggiungo un tempo
    // di refresh (di attesa) prima di fare il redirect alla index
    header("refresh:3; url=index.html");

}
// stampo l'array
for ($i = 0; $i < count($righe_config); $i++) {
    // echo "#{$righe_config[$i]}#<br>\n";
    echo $righe_config[$i] . "<br>";
}

// Controllo per scrupolo se nella posizione 0 dell'array c'e' quello
// che voglio. TODO: uso l'operatore di confronto forte con '===',
// il quale controlla se l'espressione di sx e' identica a quella di dx nel tipo e nel valore.
// Invece, l'operatore == mi potrebbe fare dei cast automatici
if($righe_config[0] === "fr")
    echo "<h1>UGUALE</h1>";
else
    echo "<h1>DIVERSO</h1>";
?>

<!DOCTYPE html>
<html lang=" <?php echo "en"; ?> ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>