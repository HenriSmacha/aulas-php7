<?php
class Conversor{

  private $real;
  private $dolar;
  private $euro;

  public function Conversor(){

  }
  public function getReal():float{
    return $this->real;
  }
  public function setReal($real):void{
    $this->real = $real;
  }
  public function getDolar():float{
    return $this->dolar;
  }
  public function setDolar($dolar):void{
    $this->dolar=$dolar;
  }
  public function getEuro():float{
    return $this->euro;
  }
  public function setEuro($euro):void{
    $this->euro = $euro;
  }

  public function cotarDolar():float{
    return $this->real/$this->dolar;
  }

  public function cotarEuro():float{
    return $this->real/$this->euro;
  }
}
