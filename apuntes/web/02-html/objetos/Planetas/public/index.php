<?php
include('../config/init.php');
include('../src/data.php');

//$bocata = new Bocata('Calamares');
//esto no:
//require('../src/Bici.php');
//$b = new Bici(2);

//$tierra = new Planeta("La Tierra",5.972 * pow(10, 24), 12742,150000000 );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proyecto</title>
    </head>
    <body>
    <h1>Hola Planetas</h1>
    <h2>Formulario para Crear un Planeta</h2>
    <form method="POST">
        <label for="nombre">Nombre del Planeta:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="masa">Masa (kg):</label>
        <input type="number" name="masa" required><br><br>

        <label for="diametro">Diámetro (km):</label>
        <input type="number" name="diametro" required><br><br>

        <label for="distanciaDesdeElSol">Distancia desde el Sol (km):</label>
        <input type="number" name="distanciaDesdeElSol" required><br><br>

        <input type="submit" value="Crear Planeta">
    </form>
    </body>
</html>