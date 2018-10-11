<?php
class Pattenr{

  public static function nomeCompleto($n,$s){$array = array($n,$s); $name = implode(" ",$array); return ucwords(strtolower($name));}

  public static function dataDeNasc($d,$m,$a){
    $array = array($d,$m,$a);
    $nascimento = implode("/",$array);
    return $nascimento;
  }
}
