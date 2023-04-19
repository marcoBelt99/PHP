<?php

// EREDIT. + MODIFICATORE DI ACCESSO PROTECTED
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

    // MODIFICATORE PROTECTED
    protected function chiSono() {
        echo "Nome: " . $this->get_nome() . "\t" . "Cognome: " . $this->get_cognome();
    }
    

}


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


    public function chiSei() {
        $this->chiSono();
    }



    
}

$tizio = new Persona("Marco", "Beltrame");

$tizio->scrivi_informazioni();


$tizio->set_nome("Diletta");
$tizio->set_cognome("Biondi");
echo "</br>";
$tizio->scrivi_informazioni();
unset($tizio);


$utente1 = new Utente("Mario", "Rossi", "rossimario@unife.it");
echo "</br>";
$utente1->scrivi_informazioni();

echo "<br>";

// La seguente invocazione dara' errore:
$gabriele = new Utente("Gabriele", "Polmonari", "gabripolmo@edu.unibo.it");
// echo $gabriele->chiSono();
// La seguente invocazione, invece, è legale:
echo $gabriele->chiSei();
?>