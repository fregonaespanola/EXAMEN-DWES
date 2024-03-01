<?php
include('data.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio Clase</title>
</head>
<body>
   <?php numFrutas($frutas)?><br>
    <?php tabFrutas($frutas,$precios)?><br>
    <?php tabNoBucleFrutas($frutas,$precios)?><br><br><br>
    <?php echo tablaSinBucle($frutas)?><br>
    <br><br>
    <?php alumnoJoven($alumnos)?><br>
    <?php noBucleAlumnoJoven($alumnos)?><br>
    <?php tablaAlumnos($alumnos)?><br><br>
<h1>pruebas</h1>
    <?php echo noBucleBusca($alumnos)?>

    
</body>
</html>