<?php
// MEMBRI E PROPRIETA' STATIC: con operatore di visibilita' (::) posso accedere sia alle costanti
// nelle classi ma anche ai metodi di una classe che possono essere richiamati anche senza la 
// creazione diun oggetto specifico. Sono i cosiddetti metodi statici.

use Persona as GlobalPersona;
use Utente as GlobalUtente;

class Calcolo
{

    public static function  calcolaInteresse($capitale, $tasso, $tempo)
    {
        return round((($capitale * $tasso * $tempo) / 36500), 2);
    }
}

class Persona
{

    public static function chiSono()
    {
        echo "Salve, mondo!";
    }

    protected static function presentazione()
    {
        echo "Sono una persona avente un nome ed un cognome";
    }

    protected static function letterina()
    {
        echo "Questa e' una letterina </br>";
    }

    public function __construct()
    {
        // Come nel caso delle costanti, anche i membri statici possono essere richiamati all'interno della stessa classe
        // a cui appartengono usando la parola chiave self
        self::presentazione();
    }
}


class Utente extends Persona
{
    public function __construct()
    {
        Persona::chiSono();
        
        // Con una nuova parola chiave posso fare:
        echo "<br>";
        parent::letterina();
    }

    
}


// Interesse
$capitale = 1000;
$interesse = Calcolo::calcolaInteresse($capitale, 10, 30);
echo "Interesse = " . $interesse;
echo "<br>";
echo "Montante = " . $capitale + Calcolo::calcolaInteresse($capitale, 10, 30);

echo "<br>";

// Persona
Persona::chiSono();
echo "<br>";
$p = new Persona();

echo "<br>";

// Quando lavoro solo con i membri statici, posso evitare di creare l'oggetto, ma basta fare:
new Utente();
/* In questo caso ho creato un oggetto Utente dentro al cui costruttore trovo la chiamata del metodo statico chiSono() 
    appartenente al secondo oggetto Persona()  */