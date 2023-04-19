<?php
    // Definisco una costante in PHP
    // Tuttavia, tale modalita' non e' utilizzabile all'interno di una classe
    define("PROGRAMMAZIONE", "La programmazione e' l'attivita' di produzione dei programmi.");

   

    class Persona {

        // La parola chiave da usare nel contesto delle classi non e' define, bensi' const
        const SALVE = "Salve, mondo!";
        const WHO = "Sono una persona!";

        public function chiSono() {
            echo self::WHO; // Anziche' fare Persona::WHO utilizzo la keyword self. Funziona solo se la uso dentro la classe in cui e' definita la costante
        }

    }

    echo PROGRAMMAZIONE; // Costante definita in modo classico
    echo "<br>";
    echo Persona::SALVE; // Costante definita nel contesto delle classi
    /** Vedo anche l'OPERATORE DI VISIBILITA' realizzato con il simbolo dei due punti ripetuto che ha lo scopo
    *   di far accedere a una costante presente all'interno di una classe.
    */

    echo "<br>";
    $tizio = new Persona();
    $tizio->chiSono();

?>