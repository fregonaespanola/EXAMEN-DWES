<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Práctica 4</title>
</head>
<body> 
    <!--<?php
    for($i=0;$i<=255;$i+=$step){
        $color = $i;
        $colores[$i] = sprintf("#00%02X00", $color);
    }
    ?>
    <?php foreach ($colores as $hexa): ?>
        <div style="background-color:<?=$hexa?>; width:auto; height:25px">
        </div>
    <?php endforeach; ?>-->
    <?php
    for($i=0;$i<=255;$i+=$step): ?>
        <?php $color = sprintf("#00%02X00", $i); ?>
        <div style="background-color:<?=$color?>; width:auto; height:<?=$pixeles?>vh"></div>
    <?php endfor; ?>

</body>
</html>