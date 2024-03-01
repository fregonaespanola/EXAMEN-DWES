<?php
include('data.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Lista de Películas/Series</title>
</head>
<body>
  <h1>Mi Lista de Películas/Series</h1>

  <form method="post" action="data.php">
    <label for="nombre">Nombre de la Película/Serie:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="rating">Rating:</label>
    <input type="number" id="rating" name="rating" step="0.1">
    <button type="submit">Agregar</button>
  </form>

  <h2>Películas con Rating</h2>
  <ul>
    <?php
    $peliculasConRating = [];
    if (file_exists('peliculas.json')) {
      $peliculas = json_decode(file_get_contents('peliculas.json'), true);
      foreach ($peliculas as $pelicula) {
        if (isset($pelicula['rating']) && !empty($pelicula['rating'])) {
          echo "<li>{$pelicula['nombre']} (Rating: {$pelicula['rating']})</li>";
        }
      }
    }
    ?>
  </ul>

  <h2>Películas para ver</h2>
  <ul>
    <?php
    if (file_exists('peliculas.json')) {
      foreach ($peliculas as $pelicula) {
        if (!isset($pelicula['rating']) || empty($pelicula['rating'])) {
          echo "<li>{$pelicula['nombre']}</li>";
        }
      }
    }
    ?>
  </ul>
</body>
</html>