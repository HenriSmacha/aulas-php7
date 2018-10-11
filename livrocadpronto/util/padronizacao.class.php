<?php
class Padronizacao {

  public static function padronizarMaiMin($v){
    return ucwords(strtolower($v));
  }

  public function antXSS($v){
    return htmlspecialchars($v);
  }
}
