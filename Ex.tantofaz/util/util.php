<?php
class Util{

  public function patternMaMin($r){return ucwords(strtolower($r));}
  public function patterEmail($r){return strtolower(filter_var($r,FILTER_VALIDATE_EMAIL)? $r : "e-mail invalido");}
}
