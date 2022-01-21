<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>
</head>
<body>

<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito
con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php 
    $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Impedit dolorum, quis quam, voluptatum accusamus beatae similique 
                est odio cumque sapiente fuga, porro quae sed modi ipsa recusandae 
                obcaecati sit ipsam!';
?>

<div >
    <h1>
        Testo iniziale (lunghezza: <?php echo strlen($text); ?> caratteri)
    </h1>

    <p>
        <?php echo $text ?>
    </p> 
</div>



<?php 
    $replaced_text = str_replace("voluptatum", "***", $text)
?>


<div>
    <h1>
        Testo con censura (lunghezza: <?php echo strlen($replaced_text); ?> caratteri)
    </h1>

    <p>
        <?php echo $replaced_text ?>
    </p>
</div>



</body>
</html>