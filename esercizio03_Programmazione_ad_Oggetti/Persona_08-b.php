<?php

// CLASSI ASTRATTE: utili solo per definire gli oggetti che da esse discendono, ma per ess
// non e' richiesta alcuna implementazione di funzioni membro specifiche. Sono classi per le quali 
// non si implementa alcuna funzionalita' specifica, ma esse rappresentano invece il punto di partenza
// per la creazione, ovvero derivazione, di classi "reali" con reali funzionalita' in esse implementate.
abstract class Persona
{
    // Sono nella classe base, quindi dichiaro solamente il metodo, non lo impelemento!
    abstract protected function chiSono($nome, $cognome); // metto solo la firma
}


class Utente extends Persona 
{
    // L'implementazione del metodo la faccio nella classe figlio
    public function chiSono($nome, $cognome)
    {
        echo "Il mio nome e': " . $nome . " " . $cognome;
    }
}

$tizio = new Utente();
echo $tizio->chiSono("Mario", "Verdi");

/*  N.B: nella classe figlio, il metodo che derivo deve avere lo stesso nome e un tipo di visibilita' uguale 
    o maggiore  */