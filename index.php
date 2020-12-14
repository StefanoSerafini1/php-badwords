<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first step of PHP</title>
</head>
<body>

    <h1>Paragrafo PHP</h1>
    <?php
        //variabile paragrafo
        $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.';
        //variabile con valore ottenuto tramite get nel url
        $parola_proibita=  $_GET['badword']; 
        //variabile di modifica della parola acquisita da get all'interno del paragrafo con uso di str_replace
        $modifica= str_replace($parola_proibita , '*****' , $paragrafo);
    ?>
    <!-- paragrafo stampato senza mod -->
    <p><?php echo $paragrafo; ?></p>
    <!-- paragrafo stampato con mod str_replace -->
    <p><?php echo $modifica; ?></p>
    <!-- lunghezza del paragrafo in caratteri tramite strlen -->
    <h2>Lunghezza stringa paragrafo : <?php echo strlen($paragrafo); ?></h2>
    <!-- parola acquisita tramite GET -->
    <h2>Parola da modificare: <?php echo $parola_proibita; ?></h2>
</body>
</html>