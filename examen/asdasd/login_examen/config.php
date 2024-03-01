<?php
$host = 'localhost';
$dbname = 'examen';
$username = 'examen';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Configuramos PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejamos cualquier error de conexión aquí
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>
