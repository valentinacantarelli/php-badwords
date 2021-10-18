<?php
    $testo="Do what you want cause a pirate is free, you are a pirate!
    Being a pirate is alright to be,
    Do what you want cause a pirate is free,
    You are a pirate!";
    $badWord=$_GET["badword"];
    $testoCensurato=str_replace($badWord,'***',$testo);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <h2>Testo originale</h2>
            <p> <?php echo $testo; ?></p>
            <h4>La lunghezza del testo è di <?php echo strlen($testo) ?> caratteri</h4>
            <h2>Testo "censurato"</h2>
            <p> <?php echo $testoCensurato?> </p>
            <h4>La lunghezza del testo "censurato" è di <?php echo strlen($testoCensurato) ?> caratteri</h4>
        </div>
    </body>
</html>