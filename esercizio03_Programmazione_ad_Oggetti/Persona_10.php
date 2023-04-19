<?php
/** PHP supporta solo l'ereditarieta' singola. Nonostante cio', tale linguaggio cerca di superare questa limitazione consentendo il riuso
 *  di metodi presenti in differenti classi indipendentemente dal vincolo gerarchico della singola derivazione. Tale meccanismo è noto come
 *  traits. In somma sintesi si tratta di un modo per organizzare pezzi di codice che possono essere poi richiamati, ma non per un contesto di
 *  ereditarieta', ma come se fossero semplicemente inclusi.
 */

 // TRAIT
trait Saluti // in buona sostanza questo trait 'Saluti' e' una sorta di classe
{
    public function italiano()
    {
        return "Salve, mondo!</br>";
    }

    public function inglese()
    {
        return "Hello, world!</br>";
    }

    public function francese()
    {
        return "Bonjour, le monde!</br>";
    }

}

    
    class Benvenuto {
        use Saluti;    // Posso richiamare tale pezzo di codice in una mia qualsiasi classe usando la parola chiave use
    }


    $b = new Benvenuto();
    echo $b->italiano();
    echo "<br>";
    echo $b->inglese();
    echo "<br>";
    echo $b->francese();

?>