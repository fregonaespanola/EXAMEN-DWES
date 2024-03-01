<?php
session_start();
$mostrar = false;
// Verificamos si el usuario pertenece al grupo "admin"
if ($_SESSION['grupo'] == 1) {
    $mostrar = true;
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>

<?php if($mostrar){ ?>
<p>Información solo para admin</p>
<?php }?>
</body>
</html>
