<?php
class Quadrado{

  private $lado;

  public function Quadrado(){}
  public function setLado():float{return $this->lado;}
  public function getLado(float $lado):void{$this->lado = $lado;}
  public function calcularArea():float{return ($this->lado*$this->lado);}
  public function calcularPerimetro():float{return ($this->lado)*4;}

}
