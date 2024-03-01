<?php
$array = [];

$BMW = new Coche(1000, 'BMW', 30);
$Renault = new CocheConRemolque(1001, 'Renault', 30, 200);
$Porche = new Coche(1002, 'Porche', 40);
$Ford = new CocheGrua(1003, 'Ford', 20, $Porche);
$Nissan = new CocheConRemolque(1005, 'Nissan', 22, 250);
$Kia = new CocheGrua(1007, 'Kia', 30, $Nissan);

$array = [$BMW, $Renault, $Ford, $Kia];

function imprimirEnDiv($coche) {
    echo "<div>" . $coche->pintarInformacion() . "</div>";
}
?>