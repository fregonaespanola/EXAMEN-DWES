<?php
$frutas = ["Manzana", "Plátano", "Naranja", "Uva"];
$precios = [1.2, 0.8, 1.0, 2.5];

// Calcular el precio total utilizando array_sum()
$precioTotal = array_sum($precios);

// Mostrar el resultado
echo "El precio total de las frutas en el carrito es: " . number_format($precioTotal, 2)."€";
?>