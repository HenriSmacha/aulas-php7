<?php
session_start();
include '../module/register.class.php';
include '../util/util.php';

$r=new Register();
$r->name = Util::patternMaMin($_POST['txtname']);
$r->lastName = Util::patternMaMin($_POST['txtlast']);
$r->email = Util::patterEmail($_POST['txtemail']);

$_SESSION['r'] = serialize($r);
echo $r;
header("lcation:../answer.php");
