<?php

// OVERLOADING soluzione 1: non delle migliori. E' un tipo di sovrapposizione orizzontale

// RICORDA: il POLIMORFISMO e' la possibilita' per una funzione di assumere differenti "forme". 
// Il PHP, contrariamente ad altri linguaggi OO come C++ e Java, non supporta in maniera completa il polimorfismo.
// OVERLOADING: possibilita' che una certa funzione abbia differenti copie di se stessa aventi lo stesso nome ma con un numero 
// di e/o tipo di parametri differente
/*  Se provassi a definire piu' metodi costruttori, con un numero diverso di argomenti (arieta'=numero di argomenti di una funzione)
    otterrei un errore in fase di esecuzione */

    
class Persona {
    // PROPRIETA'
    private $nome;
    private $cognome;

    // COSTRUTTORE: creo un costruttore vuoto e in esso verifico, con la funzione func_num_args il numero di argomenti passati
    function __construct()
    {
        if(func_num_args() == 1) {  // se tale numero e' uguali ad 1, imposto solo il nome
            $this->nome = func_get_arg(0);
        }
        else if(func_num_args()==2) { // se il numero di argomenti e' 2, imposto entrambe le proprieta' nome e cognome
            $this->nome = func_get_arg(0);
            $this->cognome = func_get_arg(1);
        }
        else // se non son stati passati argomenti
            $this->nome = "Nessuno";
    }

    // DISTRUTTORE
    function __destruct()
    {
        echo "<br>" . "chiamata al distruttore";
    }

    /** TODO: SET E GET */
    public function get_nome() {
        return $this->nome;
    }
    
    public function  set_nome($nome) {
        $this->nome = $nome;
    }

    public function get_cognome() {
        return $this->cognome;
    }
    
    public function  set_cognome($cognome) {
        $this->cognome = $cognome;
    }

    // Metodo che ho scritto io di supporto per la stampa di nome e cognome (per seguire il principio del DRY)
    function scrivi_informazioni() {
        echo "Mi chiamo: " . $this->get_nome() . " " . $this->get_cognome() . ".</br>";
    }

    // MODIFICATORE PROTECTED
    protected function chiSono() {
        echo "Nome: " . $this->get_nome() . "\t" . "Cognome: " . $this->get_cognome();
    }
    
}


// Overloading: soluzione 1

$tizio = new Persona();
echo $tizio->scrivi_informazioni();

$caio = new Persona("Marco");
echo $caio->scrivi_informazioni();

$sempronio = new Persona("Mario", "Rossi");
echo $sempronio->scrivi_informazioni();

?>