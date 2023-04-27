<?php

abstract class DatabaseAbstractClass
{
   public const filename = "config.ini";

    
    /** Metodo di connessione alla base di dati. </br>
     *  Si occupa di andare a leggere dei parametri di applicazione dal file 'config.ini'
     *  di configurazione */
    public static function connessione()
    {
        // Leggo i parametri di connessione al database sul file di configurazione: config.ini
        $parametri = parse_ini_file("config.ini", false,INI_SCANNER_NORMAL);
        echo "Test di connessione. I parametri di connessione sono:<br>";
        
        for ($i=0; $i < sizeof($parametri); $i++) { 
            echo $parametri[$i];
        }
        //echo $parametri;
    }

    /** Metodo di aggiunta di un record al database */
    abstract function aggiungi();


    /** Metodo di aggiunta di un record al database */
    abstract function elenco();

    /** Metodo di modifica di un record del database */
    abstract function modifica();

    /** Metodo di eliminazione di un record dal database */
    abstract function elimina();
}
