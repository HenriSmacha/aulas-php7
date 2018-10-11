<?php
class Util{

  public static function nomeCompleto($n,$s){$array = array($n,$s); $name = implode(" ",$array); return ucwords(strtolower($name));}
  public static function dataDeNasc($d,$m,$a){
    $array = array($d,$m,$a);
    $nascimento = implode("/",$array);
    return checkdate($m,$d,$a)? $nascimento : "Data inválida";
  }
  public function patterEmail($r){return strtolower(filter_var($r,FILTER_VALIDATE_EMAIL)? $r : "e-mail invalido");}
}
