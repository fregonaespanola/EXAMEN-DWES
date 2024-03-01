<?php
session_start();

// Verificar si el formulario de inicio de sesión fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Obtener el usuario y contraseña del formulario
    $email = $_POST['usuario'];
    $pass = $_POST['contrasena'];

    // Consultar la base de datos para verificar las credenciales
    $query = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el usuario existe y la contraseña es correcta
    if ($usuario && password_verify($pass, $usuario['pass'])) {
        // Iniciar sesión y guardar información del usuario
        $_SESSION['usuario'] = $usuario['email'];
        $_SESSION['grupo'] = 'Grupo del usuario'; // Ajusta según tu lógica

        // Redirigir al usuario a la página privada
        header("Location: menu.php");
        exit;
    } else {
        // Si las credenciales son incorrectas, mostrar mensaje de error
        echo "Usuario o contraseña incorrectos";
    }
}
?>
