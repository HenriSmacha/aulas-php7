<?php
require '../modelo/Circulo.class.php';

$c=new Circulo();
$c->setRaio($_POST['txtcirc']);
header("location: ../resposta.php?raio={$c->getRaio()}&perimetro={$c->calcularPerimetro()}&area={$c->calcularArea()}");
