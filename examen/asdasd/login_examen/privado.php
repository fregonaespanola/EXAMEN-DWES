<?php
session_start();
$mostrar = false;
if (isset($_SESSION['usuario'])) {
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
<p>Información solo para gente autentificada</p>
<?php }?>
</body>
</html>
