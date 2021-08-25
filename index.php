<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, 
    dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.-->


    <main>
        <?php       //creo variabile con testo e stampo a schermo
         $mioTesto = "Oggi riprendono le lezioni! Forza e buon lavoro!<br/>
                    Anche se è ancora agosto e in Sicilia fa caldo, seguire le lezioni è importante!";
        ?>

        <h1>Reminder: <?php echo $mioTesto ?></h1> <!--php aperto e chiuso sopra, qui per concatenare richiamo la variabile che lui ha già in memoria, 
                                                    non la devi dichiarare di nuovo-->

        <?php   //stampo la lunghezza del testo
            $lunghezza = strlen($mioTesto);
            echo "La stringa ha questa lunghezza: {$lunghezza} caratteri.<br/>";
        ?>
        

        <!-- manipolazione separata dalla visualizzazione -->
       <?php
            $parola = $_GET["name"];
            $parolaCensurata = str_ireplace($parola, "***", $mioTesto);
                  
        ?>
        <h4>Testo "censurato": <?php echo $parolaCensurata . '<br/> La lunghezza della stringa è: '.strlen($mioTesto) ?></h4>
        
        <?php
         $posizione = strpos($mioTesto, 'agosto');//cerca all'interno di una stringa un'altra stringa e ti torna la posizione in cui si trova
        
        ?>
        <h6>La posizione della parola agosto è <?php echo $posizione ?></h6>
    </main>
</body>
</html>