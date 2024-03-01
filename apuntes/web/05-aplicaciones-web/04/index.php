<?php
// Comprobamos si existe la cookie
if(isset($_COOKIE['contador'])) {
    // Si existe la cookie, incrementamos su valor en 1
    $contador = $_COOKIE['contador'] + 1;
} else {
    // Si no existe la cookie, establecemos su valor inicial en 1
    $contador = 1;
}

// Establecemos la cookie con el nuevo valor
setcookie('contador', $contador, time() + 3600); // Expira en 1 hora (3600 segundos)

// Mostramos el valor de la cookie recibida
echo "El valor de la cookie es: " . $_COOKIE['contador'];
?>
