<?php
session_start();

// Conectar a la base de datos
$dbname = 'examen';
$user = 'examen';
$password = '1234';
$dsn = "mysql:host=localhost;dbname=$dbname";

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

// Verificar si se recibió el token
if (isset($_GET['token'])) {
    // Obtener el token de la URL
    $token = $_GET['token'];

    // Consultar la base de datos para verificar el token
    $query = "SELECT * FROM auth_tokens WHERE token = :token";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':token', $token);
    $stmt->execute();
    $auth_token = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el token es válido
    if ($auth_token) {
        // El token es válido, redirigir al usuario según el ID de usuario asociado al token
        $id_user = $auth_token['id_user'];
        $_SESSION['usuario'] = $id_user; // Aquí podrías guardar más información del usuario si lo necesitas
        header("Location: privado.php"); // Redirigir a la página privada
        exit;
    } else {
        // El token no es válido, redirigir al usuario a una página de error o mostrar un mensaje de error
        echo "Token inválido";
    }
} else {
    // Si no se proporcionó un token, redirigir al usuario a una página de error o mostrar un mensaje de error
    echo "Token no proporcionado";
}
?>
