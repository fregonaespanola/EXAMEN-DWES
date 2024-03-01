<?php
$seg = date("s");
$estilo = 'verde';
if ($seg % 2 == 0) {
    $estilo = 'verde';
} else {
    $estilo = 'blanco';
}
?>
<!html>
<head>
<style>
    .verde{
        color:white;
        background:green;}
    .blanco{
        color:green;
        background:white;}
</style>
</head>
<body class="<?php echo $estilo?>">
<h1>Hola mundo</h1>
<?php echo "¡Hola!"?>
<br>
<?php echo "$seg"?>
</body>
</html>
