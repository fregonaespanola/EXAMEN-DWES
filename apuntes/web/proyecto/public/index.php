<?php
include('../config/init.php');

//$bocata = new Bocata('Calamares');
//esto no:
//require('../src/Bici.php');
$b = new Bici(2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proyecto</title>
    </head>
    <body>
    <h1>Hola Autoload</h1>
    <p><?=$b?></p>
    </body>
</html>