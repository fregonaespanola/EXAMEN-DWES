<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Práctica 5</title>
</head>
<body> 
    <?php
    for($i=0;$i<5;$i++): ?>
        <?php $color = sprintf("#%02X%02X%02X",mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); ?>
        <div style="background-color:<?=$color?>; width:auto; height:<?=$pixeles?>vh"></div>
    <?php endfor; ?>

    <p>
    <?php for ($i = 1; $i <= $n; $i++):?>
        <?php for ($j = 1; $j <= $n - $i; $j++):?>
            &nbsp;
        <?php endfor; ?>
    
        <?php for ($k = 1; $k <= 2 * $i - 1; $k++):?>
            *
        <?php endfor; ?>

    <br>
    <?php endfor; ?>

    
    </p>

</body>
</html>