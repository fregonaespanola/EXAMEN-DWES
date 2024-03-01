<?php
session_start();

// Si llegamos aquí, significa que el usuario está autenticado y podemos mostrar el contenido
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<p>Información solo para público</p>

</body>
</html>

