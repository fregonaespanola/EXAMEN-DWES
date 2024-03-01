<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>

    <!-- Formulario para agregar tareas -->
    <form method="POST" action="data.php">
        <label for="tarea">Nueva Tarea:</label>
        <input type="text" id="tarea" name="tarea" required>
        <button type="submit">Agregar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Tarea</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $archivo = 'tasks.txt';
            if (file_exists($archivo)) {
                $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($lineas as $linea) {
                    echo "<tr><td>$linea</td><td><a href='#?tarea=$linea'>Eliminar</a></td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>