<?php
require '../modelo/bhaskara.class.php';

$bas=new Bhaskara();

$bas->setA($_POST['txta']);
$bas->setB($_POST['txtb']);
$bas->setC($_POST['txtc']);

echo ' Valor de A: '.$bas->getA().'<br>Valor de B: '.$bas->getB().'<br> Valor de C: '.$bas->getC();
echo '<hr>Valor de X1 : '.$bas->calcularX1().'<br> Valor de X2: '.$bas->calcularX2();
