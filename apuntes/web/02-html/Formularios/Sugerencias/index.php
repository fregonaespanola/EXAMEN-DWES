<?php
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
define('MIN_DESCRIPTION',10);
define('FILE_DATA','data.csv');

$msg = "";

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
}

$titulo = "";
$descripcion= "";
$fecha= "";
$permanente= "";
$nombre = "";

$errores = [];

if(isset($_POST['enviar'])){
    if(isset($_POST['titulo'])&& $_POST['titulo']!=""){
        $titulo = $_POST['titulo'];
    }else{
        $errores['titulo']="El título es obligatorio";
    }

    if(isset($_POST['descripcion'])&& $_POST['descripcion']!=""){
        $descripcion = $_POST['descripcion'];
        if(strlen($_POST['descripcion'])<=MIN_DESCRIPTION){
        $errores['descripcion']="Longitud minima de ".MIN_DESCRIPTION;
    }
    }else{
        $errores['descripcion']="La descripción es obligatoria";
    }

    if(isset($_POST['fecha'])&& $_POST['fecha']!=""){
        $fecha = $_POST['fecha'];
        $hoy = new DateTime("now");
        if($hoy < new DateTime($fecha)){
            $errores['fecha']="Deja de proyectar";
        }
    }

    if(isset($_POST['permanente'])&& $_POST['permanente']!=""){
        $titulo = $_POST['permanente'];//on
    }

    if(($permamente == "" && $fecha=="")||($permamente != "" && $fecha!="")){
        $errores['momento']="Debes elegir uno de estos dos";
    }

    if(isset($_POST['nombre'])&& $_POST['nombre']!=""){
        $titulo = $_POST['nombre'];
    }

    //¿Hay errores?
    if(empty($errores)){
        //$App::getDBConnection("Insert ---");
        $data = file_get_contents(FILE_DATA);
        $data = "\n$titulo;$descripcion;".(($permamente!="")?"permanente":$fecha).";$nombre";
        $data .= $fila;
        $file_put_contents(FILE_DATA, $data);

        header("Location: index.php?msg=success");
        die(0);
    }
}
?>

<html lang="es">
    <head>
        <title>Formulario</title>
        <style>
            p.error{
                color:red;
                font-size: 0.8em;
            }
            h1.success{
                color:green;
            }
        </style>
    </head>  
    <body>
        <?php if($msg!="")
            echo "<h1 class='success'>$msg</h1>";
        
        ?>
        <form action="" method="post">
            <label for="titulo">Título* <br>
            <input type="text" name="titulo" placeholder="Incidencia" value="<?=$titulo?>"></label><br>
            <?php if(isset($errores['titulo'])){?>
                <p class="error"><?=$errores['titulo']?><p>
            <?php }?>
            <br>
            <label for="descripcion">Descripción* <br><textarea type="text" name="descripcion" cols="30" rows="10" placeholder="Por favor añada una descripción"><?=$descripcion?></textarea></label><br>
            <?php if(isset($errores['descripcion'])){?>
                <p class="error"><?=$errores['descripcion']?><p>
            <?php }?>
            <br><br>

            ---elige uno---<br><br>
            <label for="fecha">Fecha<br> 
            <input type="date" name="fecha" min="2023-10-19" value="<?=$fecha?>"></label><br>
            <?php if(isset($errores['fecha'])){?>
                <p class="error"><?=$errores['fecha']?><p>
            <?php }?>
            <br>
            <label for="permanente">Permanente <br>
            <input name="permanente" type="checkbox" <?=($permamente!="")?'checked':''?>></label><br>
            <?php if(isset($errores['momento'])){?>
                <p class="error"><?=$errores['momento']?><p>
            <?php }?>
            <br><br>

            ---opcionales---<br><br>
            <label for="nombre">Nombre <br>
            <input name="nombre" placeholder="Di tu nombre" type="text" value="<?=$nombre?>"></label><br><br><br>

            <input type="submit" name="enviar" value="Enviar"/>
        </form>
    </body>  
</html>