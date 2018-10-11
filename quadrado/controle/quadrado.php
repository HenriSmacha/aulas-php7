<?php
include '../modelo/quadrado.class.php';
$qua= new Quadrado();
$qua->setLado(4,1);
echo "<p>o lado do quadrado é: ".$qua->getLado().
      "<br>a área é: ".$qua->calcularArea().
      "<br>o perímetro é: ".$qua->calcularPerimetro();
