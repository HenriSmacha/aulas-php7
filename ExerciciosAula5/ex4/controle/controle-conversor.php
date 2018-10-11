<?php
include '../modelo/Conversor.class.php';

$c=new Conversor();

$c->setReal($_POST['txtreal']);
$c->setDolar($_POST['txtdolar']);
$c->setEuro($_POST['txteuro']);

echo "O valor de ".$c->getReal()."<br>Em dolar: ".$c->cotarDolar()."<br>Em euros: ".$c->cotarEuro();
