<?php
include '../modelo/pares-ordenados.class.php';

$car= new Cartesiano;
$car->setX1($_POST['txtx1']);
$car->setX2($_POST['txtx2']);
$car->setY1($_POST['txty1']);
$car->setY2($_POST['txty2']);

echo '<p>Os valores de x1, x2, y1, y2 são respectivamente: '.$car->getX1().', '.$car->getX2().', '.$car->getY1().', '.$car->getY2().' </p>';
echo '<br>A distancia entre A e B é: '.$car->calcularDistancia();
