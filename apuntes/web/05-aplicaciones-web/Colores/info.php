<?php
include('colors.php');

$color = isset($_COOKIE['color']) && in_array($_COOKIE['color'], $colors) ? $_COOKIE['color'] : $colors[0];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['aceptarCookies'])) {
        setcookie('cookiesAceptadas', 'true', time() + 60 * 60 * 24 * 365, '/');
        header("Location: info.php");
        exit();
    } elseif (isset($_POST['rechazarCookies'])) {
        $_POST['rechazarCookies'] = 1;
        //header("Location: info.php");
        //exit();
    }
}

$cookiesAceptadas = isset($_COOKIE['cookiesAceptadas']) && $_COOKIE['cookiesAceptadas'] === 'true';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Colores</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /*background: rgba(0, 0, 0, 0.5);*/
            z-index: 9999;
            display: <?php echo $_POST['rechazarCookies'] ? 'block' : 'none'; ?>;
        }
    </style>
</head>

<body style="background-color: <?= $color ?>">
    <div class="overlay"></div>
    <p>
        Cada hemisferio se enfría durante la parte del año en la que está inclinado
        más lejos del Sol. El solsticio del invierno (diciembre en el norte, junio
        en el sur) ocurre en el momento en que esa inclinación se encuentra en su
        ángulo más extremo.
    </p>

    <?php if ($cookiesAceptadas && !$_POST['rechazarCookies']) { ?>
        <a href="pref.php">TEMA</a>
    <?php } elseif (!$cookiesAceptadas && !$_POST['rechazarCookies']) { ?>
        <a href="info.php">TEMA</a>
    <?php } else { ?>
        <a href="info.php">TEMA</a>
        <p style="color:red">Accesible al aceptar cookies.</p>
    <?php } ?>

    <?php if (!$cookiesAceptadas && !$_POST['rechazarCookies']) {
        require_once('footer.php');
    } ?>
</body>

</html>
