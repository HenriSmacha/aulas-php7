<?php
include_once '../Modelo/Circulo.class.php';

$r = new Circulo();
$r->setRaio($_POST['numidade']);


echo 'Digite o raio: <br>'.$r->getRaio();
echo '<br>calcular area: <br>'.$r->calcularArea();
echo '<br>calcular perimetro: <br>'.$r->calcularPerimetro();
