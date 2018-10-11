<?php
class Conversor{

  private $idade;

  public function Conversor(){
  }

  public function getIdade():int{
    return $this->idade;
  }

  public function setIdade($idade):void{
    $this->idade = $idade;
  }


  public function calcularIdadeMeses():int{
    return $this->idade * 12;
  }

  public function calcularIdadeSemanas():int{
    return $this->idade * 48;
  }

  public function calcularIdadeDias():int{
    return $this->idade * 365;
  }

}//fecha conversor
