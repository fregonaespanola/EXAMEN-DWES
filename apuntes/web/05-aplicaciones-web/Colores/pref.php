<?php
include('colors.php');

$cookiesAceptadas = isset($_COOKIE['cookiesAceptadas']) && $_COOKIE['cookiesAceptadas'] === 'true';

if (!$cookiesAceptadas) {
    header("Location: index.php");
    exit();
}

$error = "";

if(isset($_GET['color'])){
    if(in_array($_GET['color'], $colors)){
    //if(is_numeric(array_search($_GET['color'], $color))){
        setcookie('color',$_GET['color'], time()+60*60*24*7);
        header("Location: info.php");
        die();
    }else{
        $error = "Opción inválida";
    }
    
}
?>

<!DOCTYPE html>
    <head>
        <title>Colores</title>
    </head>
    <body>
        <h1>Página de preferencias</h1>
        <?php if($error!=""){?>
        <h2><?=$error?></h2>
        <?php }?>
        <div>
            <?php foreach($colors as $c){?>
                <a href="pref.php?color=<?=$c?>" style="background-color:<?=$c?>">&nbsp;</a>
            <?php }?>  
        </div>
    </body>
</html>