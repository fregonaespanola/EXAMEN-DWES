<?php
include('data.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Práctica 3</title>
</head>
<body><!--
    <ul><b><?=$datos['smr']['titulo']?></b>
        <li><?=$datos['smr']['desc']?></li>
        <li><a href="<?=$datos['smr']['link']?>"><?=$datos['smr']['link']?></li></a>
    </ul><br><br>

    <ul><b><?=$datos['daw']['titulo']?></b>
        <li><?=$datos['daw']['desc']?></li>
        <li><a href="<?=$datos['daw']['link']?>"><?=$datos['daw']['link']?></li></a>
    </ul><br><br>

    <ul><b><?=$datos['dam']['titulo']?></b>
        <li><?=$datos['dam']['desc']?></li>
        <li><a href="<?=$datos['dam']['link']?>"><?=$datos['dam']['link']?></li></a>
    </ul><br><br>

    <ul><b><?=$datos['asir']['titulo']?></b>
        <li><?=$datos['asir']['desc']?></li>
        <li><a href="<?=$datos['asir']['link']?>"><?=$datos['asir']['link']?></li></a>
    </ul><br><br>
-->
    <?php foreach ($datos as $programa): ?>
        <ul>
            <b><?= $programa['titulo'] ?></b>
            <li><?= $programa['desc'] ?></li>
            <li><a href="<?= $programa['link'] ?>"><?= $programa['link'] ?></a></li>
        </ul><br><br>
    <?php endforeach; ?>

</body>
</html>