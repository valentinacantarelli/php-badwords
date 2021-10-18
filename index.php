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
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Testo originale</h2>
        <?php echo $testo; ?>
        <p>la lunghezza del testo è di<?php echo strlen($testo) ?> caratteri</p>
        <h2>Testo "censurato"</h2>
        <?php echo $testoCensurato?>
        <p>la lunghezza del testo "censurato" è di <?php echo strlen($testoCensurato) ?> caratteri</p>
    </div>
</body>
</html>