<?php
session_start();
include '../modulo/register.class.php';
include '../util/pattern.class.php';

$r=new Register();
$r->name = Pattenr::nomeCompleto($_POST['txtnome'],$_POST['txtsobrenome']);
$r->email = Pattenr::patterEmail($_POST['txtemail']);
$r->nascimento = Pattenr::dataDeNasc($_POST['numd'],$_POST['numm'],$_POST['numa']);
$r->renda = $_POST['txtrenda'];
$r->sexo = $_POST['txtsexo'];
$r->endereco = $_POST['txtendereco'];
$r->complemento = $_POST['txtcomp'];
$r->rg = $_POST['txtrg'];
$r->cpf = $_POST['txtcpf'];
$r->bairro = $_POST['txtbairro'];
$r->cidade = $_POST['txtcidade'];
$r->estado = $_POST['txtestado'];
$r->cep = $_POST['txtcep'];


$_SESSION['r'] = serialize($r);
echo $r;
header("location:../answer.php");
