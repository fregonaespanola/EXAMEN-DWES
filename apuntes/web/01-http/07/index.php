<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Práctica 7</title>
        <meta http-equiv="refresh" content="<?=$sec?>"/>
</head>
<body> 
        <?php  $array =get_defined_vars() ?>
        <?php
        foreach ($array as $op):?>
        <p><?php  print_r($op) ?></p>
    <?php endforeach; ?>

</body>
</html>