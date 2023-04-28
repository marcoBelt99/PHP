<!-- TODO: Bootstrap richiede in testa alla pagine l'impostazione di tipo doctype che indica il riferimento all'uso di HTML 5-->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <!-- meta tag "viewport" serve per rendere responsivo il contenuto, cioè adattabile in automatico ai vari e differenti dispositivi. -->
    <!-- Infatti, con il valore width=device-width dell'attributo content richiedo che la pagina si adatti in larghezza alla dimensione dello -->
    <!-- specifico dispositivo che la sta visualizzando. Il valore initial-scale=1 imposta il valore di zoom predefinito al caricamento della pagina -->
    <!-- tale attributo ha un valore minimo di 0,1 e massimo di 10 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <!-- TODO: Importo i CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    Sezione responsabile turnistica agenzia trasporti Velbel s.r.l
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li class="list-item">
                       <a href="index.php?option=home">Home</a>
                    </li>
                    <li class="list-item">
                    <a href="index.php?option=news">News</a>
                    </li>
                    <li class="list-item">
                    <a href="index.php?option=aboutus">Chi siamo</a>
                    </li>
                    <li class="list-item">
                    <a href="index.php?option=contacts">Contatti</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <?php 
                    // Imposto la pagina di defaul che ovviamente sarà la home visualizzata al caricamento del sito
                    $current_page = 'home';

                    // Se l'array predefinito $_GET contiene il valore option cambio la pagina di default
                    // In pratica verifico se nell'array associativo $_GET vi sia la chiave option
                    if(array_key_exists('option', $_GET))
                    {
                        // In caso affermativo modifico la variabile $current_page associandole lo specifico valore passato sulla query
                        // string nel campo option
                        $current_page = $_GET['option']; 
                    }

                    // seleziono il valore della pagina corrente appena impostata e visualizzo quanto richiesto per la specifica
                    //  pagina in question
                    switch ($current_page) {
                        case 'news':
                            //
                        echo "<h2>News da Velbel s.r.l";
                            break;
                        case 'aboutus':
                            //
                            echo "<h2>Chi siamo</h2>";
                            break;
                        case 'contacts':
                            //
                            echo "<h2>Contatti</h2>";
                            break;
                        default:
                            echo "<h2>Benvenuto nella home della sezione turnistica </h2>";
                            echo "<p> Qui si potranno gestire i turni di lavoro dei dipendenti della ditta di trasporti Velbel s.r.l</p>";
                            echo "<img src='immagine.jpg' class='img-fluid' alt='Ditta trasporti'>";
                            break;
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- TODO: Importo il file JavaScript di Bootstrap e di Popper. Popper è una libreria che viene usata per inserire elementi quali menu dropdown, popover e tooltip in  -->
    <!-- maniera responsiva adattabile allo scrolling e alla risoluzione della pagina -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>