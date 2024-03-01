<?php
include('Coche.php');
include('data.php');


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proyecto</title>
    </head>
    <body>
        <h1>Coches</h1>
        <?php array_walk($array,'imprimirEnDiv');?>
    </body>
</html>