<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulario PHP</h1>
        <form method="get">
            <label for="texto">Introduce una cadena de texto:</label>
            <input type="text" id="texto" name="texto" value="<?php echo isset($_GET['texto']) ? htmlspecialchars($_GET['texto']) : ''; ?>" required>
            <button type="submit">Enviar</button>
        </form>
        <div class="resultados">
        <?php
        include('data.php');
        ?>
        </div>
    </div>
</body>
</html>