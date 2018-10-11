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
  public function setReal(float $real):void{
    $this->real = $real;
  }
  public function getDolar():float{
    return $this->dolar;
  }
  public function setDolar(float $dolar):void{
    $this->dolar=$dolar;
  }
  public function getEuro():float{
    return $this->euro;
  }
  public function setEuro(float $euro):void{
    $this->euro = $euro;
  }

  public function cotarDolar():float{
    return $this->real/$this->dolar;
  }

  public function cotarEuro():float{
    return $this->real/$this->euro;
  }
}
