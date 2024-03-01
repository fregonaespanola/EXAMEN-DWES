<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambiar según tu servidor
$username = "usuario"; // Cambiar según tu usuario
$password = "contraseña"; // Cambiar según tu contraseña
$dbname = "nombre_base_de_datos"; // Cambiar según tu base de datos

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si se pasan los parámetros esperados en la URL
    if(isset($_GET['email']) && isset($_GET['code'])) {
        $email = $_GET['email'];
        $code = $_GET['code'];

        // Buscar el usuario por correo electrónico y token
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND token = :token");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':token', $code);
        $stmt->execute();
        $user = $stmt->fetch();

        // Si se encuentra un usuario, actualiza el campo de verificado a TRUE
        if ($user) {
            $stmt = $conn->prepare("UPDATE usuarios SET verificado = TRUE WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            
            echo "¡Tu dirección de correo electrónico ($email) ha sido verificada correctamente!";
        } else {
            echo "Token de verificación inválido.";
        }
    } else {
        echo "Parámetros incompletos en la URL.";
    }
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
