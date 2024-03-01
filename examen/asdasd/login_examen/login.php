<?php
session_start();

// Comprobamos si ya hay una sesión iniciada
if (isset($_SESSION['usuario'])) {
  header("Location: index.php");
        exit();
}

// Comprobamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos que se han enviado las credenciales
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $error = "Por favor, introduce tu email y contraseña.";
    } else {
        // Conectamos a la base de datos (suponiendo que ya tengas la conexión establecida)
        require_once 'config.php'; // Archivo de configuración de la conexión PDO

        // Sanitizamos las entradas del formulario para prevenir inyección SQL
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);

        try {
            // Consulta para verificar las credenciales del usuario
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = :login");
            $stmt->execute(['login' => $login]);

            if ($stmt->rowCount() == 1) {
                // El usuario existe, verificamos la contraseña
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $row['secreto'])) {
                    // Contraseña correcta, iniciamos sesión
                    $_SESSION['usuario'] = $row['nombre'];
                    $_SESSION['grupo'] = $row['id_grupo'];
                    $_SESSION['pagina_anterior'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
                    header("Location: {$_SESSION['pagina_anterior']}");
                    exit();
                } else {
                    // Contraseña incorrecta
                    $error = "Contraseña incorrecta.";
                }
            } else {
                // El usuario no existe
                $error = "Usuario no encontrado.";
            }
        } catch (PDOException $e) {
            // Error de la base de datos
            $error = "Error de la base de datos: " . $e->getMessage();
        }
    }
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<form action="login.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?php echo isset($login) ? $login : ''; ?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <?php if (isset($error)) { ?>
    <p>
        <div class="error"><?php echo $error; ?></div>
    </p>
    <?php } ?>

    <p class="login-submit">
      <label for="submit">&nbsp;</label>
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
</form>
</body>
</html>
