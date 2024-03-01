<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarea = $_POST["tarea"];

    // Agregar la nueva tarea al archivo tasks.txt
    $archivo = 'tasks.txt';
    file_put_contents($archivo, $tarea . PHP_EOL, FILE_APPEND);
}

// Redirigir de nuevo a la página principal
header("Location: index.php");