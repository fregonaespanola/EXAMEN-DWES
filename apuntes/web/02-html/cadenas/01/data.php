<?php
if (isset($_GET['texto'])) {
    $texto = $_GET['texto'];

    function contarVocalesYConsonantes($texto) {
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $texto = strtolower($texto);
        $numVocales = $numConsonantes = 0;

        for ($i = 0; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], $vocales)) {
                $numVocales++;
            } elseif (ctype_alpha($texto[$i])) {
                $numConsonantes++;
            }
        }

        return ['vocales' => $numVocales, 'consonantes' => $numConsonantes];
    }

    function esPalindromo($texto) {
        $texto = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $texto));
        $reverso = strrev($texto);

        return $texto === $reverso ? 'sí' : 'no';
    }

    $conteo = contarVocalesYConsonantes($texto);
    $esPalindromo = esPalindromo($texto);

    echo "<ul>";
    echo "<li>número de vocales: {$conteo['vocales']}</li>";
    echo "<li>número de consonantes: {$conteo['consonantes']}</li>";
    echo "<li>palíndromo: $esPalindromo</li>";
    echo "</ul>";
}
?>