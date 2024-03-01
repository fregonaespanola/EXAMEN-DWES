<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $rating = $_POST['rating'];

  $pelicula = ['nombre' => $nombre, 'rating' => $rating];

  $peliculas = [];
  if (file_exists('peliculas.json')) {
    $peliculas = json_decode(file_get_contents('peliculas.json'), true);
  }

  $peliculas[] = $pelicula;

  file_put_contents('peliculas.json', json_encode($peliculas));

  header('Location: index.php');
  exit;
}
?>