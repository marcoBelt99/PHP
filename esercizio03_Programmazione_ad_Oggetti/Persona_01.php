<?php

class Persona {
    // proprieta'
    private $nome = 'Marco';
    
    // metodi
    /*public function chiSono() {
        echo $this->nome;
    }
    */

    /** TODO: SET E GET */
    public function get_nome() {
        return $this->nome;
    }
    
    public function  set_nome($nome) {
        $this->nome = $nome;
    }

}

$tizio = new Persona();
// echo $tizio->nome; // funziona solo se la proprieta' $nome e' public.
// $tizio->chiSono();

echo $tizio->get_nome();
$tizio->set_nome("Diletta");
echo "</br>";
echo $tizio->get_nome();

?>