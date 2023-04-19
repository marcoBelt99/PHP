<?php

// CLASSI ASTRATTE: utili solo per definire gli oggetti che da esse discendono, ma per ess
// non e' richiesta alcuna implementazione di funzioni membro specifiche. Sono classi per le quali 
// non si implementa alcuna funzionalita' specifica, ma esse rappresentano invece il punto di partenza
// per la creazione, ovvero derivazione, di classi "reali" con reali funzionalita' in esse implementate.
abstract class Persona
{
    // proprieta'
    protected $nome;
    protected $cognome;

    //metodi
    function __construct($nome, $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    // Sono nella classe base, quindi dichiaro solamente il metodo, non lo impelemento!
    abstract protected function chiSono();
}


class Utente extends Persona 
{
    // L'implementazione del metodo la faccio nella classe figlio
    public function chiSono()
    {
        echo "Il mio nome e': " . $this->nome . " " . $this->cognome;
    }
}

$tizio = new Utente("Marco", "Beltrame");
echo $tizio->chiSono();

/*  N.B: nella classe figlio, il metodo che derivo deve avere lo stesso nome e un tipo di visibilita' uguale 
    o maggiore  */