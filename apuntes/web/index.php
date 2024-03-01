<?php
$nombre = "Daniel García";
$apodo = "ou verdadeiro papulince";
$titulo = "Título bien bakano";
$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$fecha = "2023-09-12 21:42:54";
$seg="54";
$estilo="verde"
?>

<html>
    <style>
        .verde{
            color: white;
            background:green;}
        .blanco{
            color: green;
            background:white;}
    </style>
<body class="?php echo '"estilo"' ?>">
<h1><?php echo "$nombre"; ?></h1>
<input type=date placeholder="<?php date('d/m/Y',strtotime($fecha)); ?>"/>
<h2><?php echo "Alumno a.k.a '$apodo'"; ?></h2>
<h3><?php echo "$titulo"; ?></h3>
<p><?php echo "$texto"; ?></p>
</body>
</html>
