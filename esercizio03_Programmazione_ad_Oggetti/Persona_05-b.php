<?php

// Soluzione 2 OVERRIDING : La soluzione precedente che sfrutta l' OVERLOADING e' un tipo di sovrapposizione in verticale.
// Penso alla possibilta' che il costruttore  possa avere varie versioni di se stesso ma non nella stessa
// classe (quindi in un certo senso in "orizzontale"), bensi' in classi derivate.

// RICORDA: il POLIMORFISMO e' la possibilita' per una funzione di assumere differenti "forme". 
// Il PHP, contrariamente ad altri linguaggi OO come C++ e Java, non supporta in maniera completa il polimorfismo.
// OVERLOADING: possibilita' che una certa funzione abbia differenti copie di se stessa aventi lo stesso nome ma con un numero 
// di e/o tipo di parametri differente
/*  Se provassi a definire piu' metodi costruttori, con un numero diverso di argomenti (arieta'=numero di argomenti di una funzione)
    otterrei un errore in fase di esecuzione */

    class Persona
    {
        // proprietà
        private $nome;
        private $cognome;
        // metodi
        function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
        function __destruct() {
            echo "Addio mondo!</br>";
        }
        public function chiSono() {
            echo "Sono una persona. Il mio nome e': " . $this->nome . " " . $this->cognome . "</br>" ;
        }
    }
        class Utente extends Persona {
            private $email;
            function __construct($nome, $cognome, $email) {
                $this->nome = $nome;
                $this->cognome = $cognome;
                $this->email = $email;
        }
        public function chiSono() {
            echo "Sono un utente. Il mio nome e': " . $this->nome . " " . $this->cognome . " e la mia mail " . $this->email . "</br>" ;
        }
    }
    
    
    $tizio = new Utente("Carlo", "Mazzone", "carlomazzone@gmail.com");
    echo $tizio->chiSono();
    $tizio = new Persona("Carlo", "Mazzone");
    echo $tizio->chiSono();
    
    echo "</br>";
    $primo = new Utente("Luca", "Nervi", "nerviluca@hotmail.com");
    $primo->chiSono();
    $secondo = new Persona("Paolo", "Bitta");
    $secondo->chiSono();

    // FINAL
    /** TODO: in alcune situazioni si vuole impedire che da una classe se ne possa far derivare un'altra o si voglia impedire un overriding.
     * A tal fine si utilizza la parola chiave final. Es:
     * <?php
     *  final class Persona {
     *      //
     * }
     * 
     * class Utente extends Persona {
     *      //
     * }
     * ?>
     * 
     * Questo codice da errore poiche' la classe Utente non puo' ereditare dalla classe final Persona.
     * 
     * 
     * Posso impedire anche solo l'overriding di un metodo, es) chiSono(), scrivendo:
    * <?php
     * class Persona {
     *      final public function chiSono() {
     *          //
     *      }
     * }
     * 
     * class Utente extends Persona {
     *      public function chiSono() {
     *          // 
     *      }
     * }
     * Questo codice da errore: Cannot override final method Persona::chiSono() in C:\xampp\htdocs\...
     * ?>
     */
?>