<?php
include('data.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio Clase</title>
</head>
<body>
<h3>EJ 1</h3>
    <ul>
        <?php echo arrayEtiq("li", 3, 3.14, "juanjose", "dios", 21)?>
    </ul>
<h3>EJ 2</h3>
    <?php echo concatenarPalabras("juan","jose","pastor") ?>
<h3>EJ 3</h3>
    <?php $a="juan";concatenaCon($a,"jose","pastor"); echo $a?>
<h3>EJ 4</h3>
    <?php echo "El resultado de la multiplicación es: $resultado"?>
<h3>EJ 5</h3>
    <?php echo "Suma: ".aplicarOperacion("suma", 2,3) ?><br>
    <?php echo "Resta: ".aplicarOperacion("resta", 2,3) ?><br>
    <?php echo "Multiplicación: ".aplicarOperacion("multiplicacion", 2,3) ?>
<h3>EJ 6</h3>
    <?php $a="juan";invert($a); echo $a?>
<h3>EJ 7</h3>
    <?php $a=9;camSuma($a, 2, 4, 5); echo $a?>
<h3>EJ 8</h3>
    <?php $a=9;versionado2($a, 2, 4.3, 5); echo $a?>
<h3>EJ 9</h3>
    <?php $a=9;versionado3($a, 2, 4.3, 5,"juan",1,"doce"); echo $a?>
<h3>EJ 10</h3>
    <?php print_r(filtra_array_impares($impar(2), 1, 4, 56, 7, 8));?>
<h3>EJ 11</h3>
    <?php print_r(filtra_array_primos($esPrimo(4), 1, 4, 56, 7, 8, 23));?>
<h3>EJ 12</h3>
    <?php print_r(cubea(2, 4, 5));?>


</body>
</html>