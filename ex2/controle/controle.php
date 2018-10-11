<?php
include '../modelo/pares-ordenados.class.php';

$car= new Cartesiano;
$car->setX1($_POST['txtx1']);
$car->setX2($_POST['txtx2']);
$car->setY1($_POST['txty1']);
$car->setY2($_POST['txty2']);

header("location:../resposta.php?x1={$car->getX1()}&x2={$car->getX2()}&y1={$car->getY1()}&y2={$car->getY2()}&calculo={$car->calcularDistancia()}");
