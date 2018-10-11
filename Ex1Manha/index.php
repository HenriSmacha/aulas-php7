<?php
include 'calculadora.class.php';

$c = new Calculadora();

$c->setNum1(20);
$c->setNum2(5);

echo '<p>O primeiro número é: '.$c->getNum1().
     '<br>O segundo número é: '.$c->getNum2().
     "<br>Soma: ".$c->somar().
     "<br>Subtração: ".$c->subtrair().
     "<br>Divisão: ".$c->dividir().
     "<br>Multiplicação: ".$c->multiplicar()."</p>";
