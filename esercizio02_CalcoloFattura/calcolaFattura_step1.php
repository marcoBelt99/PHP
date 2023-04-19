<html>
    <head>
        <title>Calcolo Prezzo Finale</title>
    </head>
    <body>
        <h1>Calcolo della fattura</h1>
    <?php echo "Data fattura: " . $_GET["data_fattura"]; ?>
    <br>
    <?php echo "Quantita': " . $_GET["quantita"]; ?>
    <br>
    <?php echo "Prezzo unitario: " . $_GET["prezzo_unitario"]; ?>

    <?php $prezzo_senza_IVA = $_GET["quantita"]*$_GET["prezzo_unitario"]; ?>

    <?php
        // Mi salvo, mi persisto per le prossime pagine il prezzo senza iva
        session_start();
        $_SESSION["prezzo_no_iva"] = $prezzo_senza_IVA;
    ?>
    <p>Il prezzo (quantità * prezzo unitario) risulta pari a: <?php echo $prezzo_senza_IVA ?></p>
        <p>Seleziona un'aliquota per l'iva</p>
        <form action="calcolaFattura_step2.php" method="get">
            <select name="aliquote" id="aliquote">
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="22">22</option>
            </select>
            <!-- <input type="number" name="prezzo" id="prezzo" value="" readonly> -->
            <input type="submit" value="Conferma">
        </form>
    </body>
    
</html>