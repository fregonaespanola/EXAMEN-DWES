<?php
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir a la página de inicio o a la página de login
header("Location: index.php");
exit();
?>
