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
        $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.';
        $parola_proibita=  $_GET['badword']; 
        $modifica= str_replace($parola_proibita , '*****' , $paragrafo);
    ?>

    <p><?php echo $paragrafo; ?></p>
    <p><?php echo $modifica; ?></p>
    <h2>Lunghezza stringa paragrafo : <?php echo strlen($paragrafo); ?></h2>
    <h2>Parola da modificare: <?php echo $parola_proibita; ?></h2>
</body>
</html>