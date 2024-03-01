<?php
// Iniciar o reanudar la sesión
session_start();

// Verificar si el usuario está autenticado
if (isset($_SESSION['usuario'])) {
    // Si está autenticado, mostrar el nombre de usuario y su grupo
    echo 'Usuario: ' . $_SESSION['usuario'] . ' - Grupo: ' . $_SESSION['grupo'];
} else {
  echo 'Anonimo';
    // Si no está autenticado, mostrar formulario de inicio de sesión
    echo '
    <div class="menu">
        <form action="login.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena">
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>';
}
?>

<div class="menu">
  <a href="privado.php">privado</a>
  <a href="publico.php">público</a>
  <?php if(isset($_SESSION['usuario'])){
    include('enlaces.php');
 }?>
</div>
