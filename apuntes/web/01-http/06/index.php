<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Práctica 6</title>
</head>
<body> 
    <h1>Bienvenido <?=$nombre?>!</h1><br>
    <p>Radio: <?=$r?></p>
    <p>Pi: <?=$pi?></p><br><br>

    <p>Perímetro: <?=2*$pi*$r?></p><br>
    <p>Área:: <?=$pi*(pow($r,2))?></p><br>

</body>
</html>