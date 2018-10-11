<?php
require '../modelo/bhaskara.class.php';

$bas=new Bhaskara();

$bas->setA($_POST['txta']);
$bas->setB($_POST['txtb']);
$bas->setC($_POST['txtc']);
header("location: ../resposta.php?A={$bas->getA()}&B={$bas->getB()}&C={$bas->getC()}&x1={$bas->calcularX1()}&x2={$bas->calcularX2()}");
