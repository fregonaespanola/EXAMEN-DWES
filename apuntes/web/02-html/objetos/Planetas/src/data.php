<?php
include('Planeta.php'); // Asegúrate de incluir la clase Planeta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $nombre = $_POST['nombre'];
    $masa = $_POST['masa'];
    $diametro = $_POST['diametro'];
    $distanciaDesdeElSol = $_POST['distanciaDesdeElSol']; // Corregir el nombre del campo

    // Crea una nueva instancia de Planeta
    $nuevoPlaneta = new Planeta($nombre, $masa, $diametro, $distanciaDesdeElSol);

    // Llamar al método save en la instancia de $nuevoPlaneta
    $nuevoPlaneta->save("planetas.json");

    echo "Planeta creado y guardado en el archivo JSON.";
}
?>