<?php
include '../modelo/produto.class.php';

$p = new Produto;

$p->setNome($_POST['txtnome']);
$p->setValorCusto($_POST['txtvalor']);
$p->setQuantidade($_POST['txtquantidade']);

// echo 'Nome: '.$p->getNome().
//       '<br>Valor: '.$p->getValorCusto().
//       '<br>Quantidade: '.$p->getQuantidade();
header("location: ../resposta.php?nome={$p->getNome()}&valor={$p->getValorCusto()}&quantidade={$p->getQuantidade()}&total={$p->calcularEstoque()}");
