<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Práctica 5</title>
        <meta http-equiv="refresh" content="<?=$sec?>"/>
</head>
<body> 
    <?php
    for($i=0;$i<5;$i++): ?>
        <?php $color = sprintf("#%02X%02X%02X",mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); ?>
        <div style="background-color:<?=$color?>; width:auto; height:<?=$pixeles?>vh"></div>
    <?php endfor; ?>

</body>
</html>