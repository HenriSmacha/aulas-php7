<?php
class Validacao{

  public static function patterEmail($r){return filter_var($r,FILTER_VALIDATE_EMAIL);}
  public static function patternData($m,$d,$a){return checkdate($m,$d,$a)? 0 : 1;}
  public static function patternPorraToda($n){$exp= '/^[A-zÁ-ù ]{2,30}$/'; return preg_match($exp,$v);}
  public static function validarDinheiro($d){]
    $c= '/^[0-9]{5-10}(.,)???$}/'
}
