<?php
// Verifica si se pasan los parámetros esperados en la URL
if(isset($_GET['email']) && isset($_GET['code'])) {
    $email = $_GET['email'];
    $token = $_GET['code'];

    // Realiza la verificación del token en la base de datos utilizando PDO
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=nombre_base_de_datos', 'usuario', 'contraseña');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta SQL para verificar el token y el correo electrónico dentro del tiempo de expiración
        $stmt = $pdo->prepare('SELECT * FROM tokens WHERE email = ? AND token = ? AND exp_date > NOW()');
        $stmt->execute([$email, $token]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Si el token y el correo son correctos y aún está dentro del tiempo de expiración
            // Puedes permitir al usuario cambiar la contraseña
            echo "Token y correo electrónico válidos. Puedes cambiar la contraseña aquí.";
        } else {
            echo "Token o correo electrónico incorrectos o tiempo de expiración excedido.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Parámetros incompletos en la URL.";
}
?>
