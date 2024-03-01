<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carta de Presentación</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['nombre']) && isset($_GET['empresa']) && isset($_GET['fecha'])) {
            $nombre = $_GET['nombre'];
            $empresa = $_GET['empresa'];
            $fecha = $_GET['fecha'];

            // Texto de la carta
            $texto_carta = "Estimado/a $empresa,\n\n";
            $texto_carta .= "Me complace escribir esta carta de presentación para expresar mi interés en unirme a su empresa como un miembro valioso de su equipo. Mi nombre es $nombre y he estado buscando la oportunidad de contribuir mis habilidades y experiencia en su empresa.\n\n";
            $texto_carta .= "La fecha de hoy es $fecha, y estoy emocionado/a por la posibilidad de trabajar en $empresa. Estoy seguro/a de que mis antecedentes encajan bien con las necesidades de su organización, y estoy ansioso/a por hablar más sobre cómo puedo contribuir al éxito de la empresa.\n\n";
            $texto_carta .= "Gracias por considerar mi solicitud. Espero tener la oportunidad de discutir cómo puedo contribuir a su equipo en una conversación personal.\n\n";
            $texto_carta .= "Atentamente,\n$nombre";

            echo "<h1>Carta de Presentación Generada</h1>";
            echo "<pre>$texto_carta</pre>";
        } else {
            echo "<h1>Error: Por favor, complete el formulario</h1>";
        }
        ?>
    </div>
</body>
</html>