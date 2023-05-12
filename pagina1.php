<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Declaração de variável
    $Hora = date("H");

    if($Hora < 12){
        echo "<p> Bom dia!</p>";
    } else if ($Hora < 18){
        echo "<p>Boa tarde!</p>";
    } else{
        echo "<p> Boa noite!";
    }
    ?>
</body>
</html>