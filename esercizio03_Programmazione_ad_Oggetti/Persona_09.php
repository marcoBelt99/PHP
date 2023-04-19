<?php

/*  Nel momento in cui il codice comincia ad essere davvero duro, nel senso di complesso, devo servirmi di strumenti che possano in un certo 
    modo creare uno standard per gli oggetti che vogliamo usare. La creare di tali standard corrisponde alla defininzione di una specifica
    modalita' fatta da un insieme di metodi che una certa classe deve avere. Tale insieme di metodi e' noto come interfaccia, e serve
    per creare un modo unico affinche' vari oggetti possano essere richiamati e usati in modo del tutto simile, nascondendo le diversita'
    implementative che ognuno di essi puo' avere.
    Un'interfaccia puo' essere immaginata come il posto di guida di un'automobile. In senso e' che ci aspettiamo sempre di avere
    un volante, un freno, un acceleratore e un cambio. Ora, indipendentemente dal fatto che la macchina sia a benzina, a gasolio, a GPL,
    a metano, elettrica oppure ad idrogeno, cio' che noi vogliamo è che essa si guidi sempre allo stesso modo; infatti, come e' implementato
    il motore non deve assolutamente interessarci: io voglio solo sapere come far funzionare l'interfaccia di guida.
    */

    // INTERFACCIA
    interface Individuo
    {
        public function saluta();
    }

    class Italian implements Individuo {
        public function saluta()
        {
            echo "Ciao";
        }
    }

    class English implements Individuo {
        public function saluta()
        {
            echo "Hi";
        }
    }

    $italiano = new Italian();
    $italiano->saluta();
    echo "<br>";

    $inglese = new English();
    $inglese->saluta();