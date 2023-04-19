<?php

class Persona {
    // PROPRIETA'
    private $nome;
    private $cognome;

    // COSTRUTTORE
    function __construct($nome, $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
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

}

// Funzione che ho scritto io di supporto per la stampa di nome e cognome (per seguire il principio del DRY)
function scrivi_nome_cognome($n, $c) {
    echo "Mi chiamo: " . $n . " " . $c;
    echo "</br>";
}

$tizio = new Persona("Marco", "Beltrame");

scrivi_nome_cognome($tizio->get_nome(), $tizio->get_cognome());


$tizio->set_nome("Diletta");
$tizio->set_cognome("Biondi");

scrivi_nome_cognome($tizio->get_nome(), $tizio->get_cognome());

?>