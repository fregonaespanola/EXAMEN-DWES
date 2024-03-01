<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Cookies</title>
</head>
<body>

<h2>Lista de Cookies:</h2>
<?php

if (!empty($_COOKIE)) {
    echo '<ul>';
    foreach ($_COOKIE as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo '</ul>';
} else {
    echo '<p>No hay cookies almacenadas.</p>';
}
?>

<h2>Crear / Borrar Cookie:</h2>
<form method="post" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="valor">Valor:</label>
    <input type="text" id="valor" name="valor" required><br><br>

    <label for="expira">Expira en segundos:</label>
    <input type="number" id="expira" name="expira" required><br><br>

    <label for="ruta">Ruta:</label>
    <input type="text" id="ruta" name="ruta"><br><br>

    <label for="dominio">Dominio:</label>
    <input type="text" id="dominio" name="dominio"><br><br>

    <label for="segura">Segura:</label>
    <input type="checkbox" id="segura" name="segura" value="1"><br><br>

    <label for="httponly">HttpOnly:</label>
    <input type="checkbox" id="httponly" name="httponly" value="1"><br><br>

    <input type="submit" name="crear" value="Crear Cookie">
    <input type="submit" name="borrar" value="Borrar Cookie">
</form>

<?php

if(isset($_POST['crear'])){

    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];
    $expira = time() + $_POST['expira'];
    $ruta = $_POST['ruta'] ?? '/';
    $dominio = $_POST['dominio'] ?? '';
    $segura = isset($_POST['segura']) ? true : false;
    $httponly = isset($_POST['httponly']) ? true : false;


    setcookie($nombre, $valor, $expira, $ruta, $dominio, $segura, $httponly);
    header("Refresh:0");
}

if(isset($_POST['borrar'])){

    $nombre = $_POST['nombre'];
    setcookie($nombre, "", time() - 3600);
    header("Refresh:0");
}
?>

</body>
</html>
