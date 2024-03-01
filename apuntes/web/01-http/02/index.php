<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Práctica 2</title>
    <link href="<?=$font?>" rel="stylesheet">
    <style>
        * {
            font-family: 'Metal Mania';
        }
        
        .contenido {
            display: flex;
            justify-content: space-between;
        }
        .texto {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .autor-fecha {
            display: flex;
            justify-content: space-between;
        }
        .imagen {
            flex: 1;
            text-align: right;
        }
        img{
            width:600px;
            height:700px;
        }

        .frase{
            font-size: 28px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="contenido">
        <div class="texto">
            <article>
                <p class="frase"><i><?=$frase?></i></p>
                <div class="autor-fecha">
                    <p><?=$autor?></p>
                    <p><b><?=$fecha?></b></p>
                </div>
            </article>
        </div>
        <div class="imagen">
            <aside>
                <img src="<?=$imagen?>"/>
            </aside>
        </div>
    </div>
</body>
</html>