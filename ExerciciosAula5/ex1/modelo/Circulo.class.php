<?php
class Circulo{
  private $raio;

  public function Circulo(){

  }
  public function getRaio():float{
    return $this->raio;
  }
  public function setRaio($raio):void{
    $this->raio = $raio;
  }
  public function calcularArea():float{
    return pi()*pow($this->raio,2);
  }
  public function calcularPerimetro():float{
    return 2*pi()*$this->raio;
  }
}
