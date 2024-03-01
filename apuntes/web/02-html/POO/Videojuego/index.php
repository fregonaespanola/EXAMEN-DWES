<?php

require 'Jugador.php';

$humano = new Humano();
$humano->setPosX(10);
$humano->setPosY(5);
$humano->atacar();
$humano->defender();
echo "Posición del Humano: X = {$humano->getPosX()}, Y = {$humano->getPosY()} <br><br>";

$magoBlanco = new MagoBlanco();
$magoBlanco->setPosZ(3);
$magoBlanco->atacar();
$magoBlanco->defender();
echo "Posición del Mago Blanco: Z = {$magoBlanco->getPosZ()}<br>";

$edificio = new Edificio();
$edificio->setAltura(50);
$edificio->setDescripcion("Un edificio alto y espacioso");
echo "Altura del Edificio: {$edificio->getAltura()} metros<br>";
echo "Descripción del Edificio: {$edificio->getDescripcion()}<br><br>";


$objeto = new Objeto();
$objeto->setPeso(2.5);
$objeto->setDescripcion("Un objeto pequeño pero valioso");
echo "Peso del Objeto: {$objeto->getPeso()} kg<br>";
echo "Descripción del Objeto: {$objeto->getDescripcion()}<br><br>";
?>