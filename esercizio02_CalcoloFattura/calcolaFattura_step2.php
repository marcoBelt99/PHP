<?php 
       
            // APRO LA SESSIONE
            session_start();
            $aliquota = $_GET["aliquote"]; // recupero il valore selezionato dalla select di name 'aliquote'
            $prezzo_senza_IVA = $_SESSION["prezzo_no_iva"]; // recupero il valore dalla pagina precedente con il meccanismo delle sessioni
            $prezzo_con_IVA = (float)$prezzo_senza_IVA + ((float)($aliquota/100) *(float) $prezzo_senza_IVA);
            echo "Il prezzo finale comprensivo di IVA al ". $aliquota . "% vale: " . $prezzo_con_IVA;
        
           // echo phpinfo();
?>
       <!-- <p>Il prezzo finale risulta comprensivo di IVA al <?php // echo $aliquota . "vale: " . $prezzo_con_IVA ?></p> -->