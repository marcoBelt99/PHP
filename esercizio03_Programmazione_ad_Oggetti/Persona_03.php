<?php


// EREDITARIETA'
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
        echo "Mi chiamo: " . $this->get_nome() . " " . $this->get_cognome() . ".";
    }
    

}

// EREDITARIERTA'
class Utente extends Persona {

    private $email;

    function __construct($nome, $cognome, $email)
    {
        parent::__construct($nome, $cognome); // come la super di java (richiamo il costruttore della classe padre)
        $this->email = $email;
    }

    function get_email() {
        return $this->email;
    }

    function set_email($email) {
        $this->email = $email;
    }

    function scrivi_informazioni()
    {
        // richiamo il metodo della classe padre e gli concateno le informazioni specializzate
        echo parent::scrivi_informazioni() . " La mia Mail: " . $this->get_email() . ".";
    }

    
}

$tizio = new Persona("Marco", "Beltrame");

$tizio->scrivi_informazioni();


$tizio->set_nome("Diletta");
$tizio->set_cognome("Biondi");
echo "</br>";
$tizio->scrivi_informazioni();

unset($tizio);

echo "<br>";
$utente_temp = new Persona("Mattia", "Forza");
$utente_temp->scrivi_informazioni();
unset($utente_temp); // con la unset distruggo la variabile dalla memoria
// echo $utente_temp->get_nome(); // infatti se decommento questo ottengo errore



$utente1 = new Utente("Mario", "Rossi", "rossimario@unife.it");
echo "</br>";
$utente1->scrivi_informazioni();

echo "<br>";

$utente2 = new Utente("Carlo", "Mazzone", "carlo@libritalia.it");
echo $utente2->scrivi_informazioni();


?>