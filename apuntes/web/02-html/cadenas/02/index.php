<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Carta de Presentación</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Generar Carta de Presentación</h1>
        <form action="data.php" method="get">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="empresa">Empresa:</label>
            <input type="text" id="empresa" name="empresa" required><br>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required><br>

            <button type="submit">Generar Carta</button>
        </form>
    </div>
</body>
</html>