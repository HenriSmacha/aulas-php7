<?php
include 'conversor.class.php';

$c = new Conversor();

$c->setIdade(17);

echo "<p>A sua idade é: ".$c->getIdade().
     "<br>A sua idade em meses é: ".$c->calcularIdadeMeses().
     "<br>A sua idade em semanas é: ".$c->calcularIdadeSemanas().
     "<br>A sua idade em dias é: ".$c->calcularIdadeDias()."</p>";
