<?php
include 'Usuario.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Historial deportes</title>
</head>
<body>
<?php
$usuario1 = new Usuario("Juan", "Magan", "Fútbol");
$usuario2 = new UsuarioPremium("Maria", "Patiño", "Paddle");
$admin = new Administrador("Admin", "Admin", "Basket");

$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Derrota");
$usuario1->introducirResultado("Empate");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Derrota");
$usuario1->introducirResultado("Victoria");
$usuario1->introducirResultado("Derrota");
$usuario1->introducirResultado("Victoria");
$usuario1->imprimirInformacion();

$usuario2->introducirResultado("Victoria");
$usuario2->introducirResultado("Victoria");
$usuario2->introducirResultado("Victoria");
$usuario2->imprimirInformacion();

$admin->crearPartido();
$admin->introducirResultado("Victoria");
$admin->introducirResultado("Victoria");
$admin->introducirResultado("Derrota");
$admin->introducirResultado("Victoria");
$admin->imprimirInformacion();
?>
</body>
</html>