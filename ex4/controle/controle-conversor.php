<?php
include '../modelo/Conversor.class.php';

$c=new Conversor();

$c->setReal($_POST['txtreal']);
$c->setDolar($_POST['txtdolar']);
$c->setEuro($_POST['txteuro']);


header("location:../resposta.php?real={$c->getReal()}&dolar={$c->cotarDolar()}&euro={$c->cotarEuro()}");
