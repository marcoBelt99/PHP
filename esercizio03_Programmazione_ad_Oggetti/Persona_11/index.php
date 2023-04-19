<?php
    echo "<html><head><title>Il mio sito</title></head><body><h1>Il mio sito</h1>";
    include "main.php";
    include "footer.php";

    $oggetto1 = new Main\Messaggio; // uso questa sintassi qui per creare l'oggetto presente in un determinato namespace
    $oggetto2 = new Footer\Messaggio;

    $oggetto1->benvenuto1();
    $oggetto2->benvenuto2();

    echo "</body></html>";
?>