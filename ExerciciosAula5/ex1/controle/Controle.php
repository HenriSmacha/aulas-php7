<?php
require '../modelo/Circulo.class.php';

$c=new Circulo();
$c->setRaio($_POST['txtcirc']);

echo 'Valor do raio: '.$c->getRaio().'<br>Perimetro: '.$c->calcularPerimetro().'<br>Sua area é de : '.$c->calcularArea();
