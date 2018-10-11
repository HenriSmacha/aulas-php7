<?php
class Circulo{
    private $raio;
    private $PI = 3.14;

    public function PI(){
      return $this->PI;
    }

    public function getRaio():float{
      return $this->raio;
    }
    public function setRaio($raio):void{
      $this->raio = $raio;
    }


    public function calcularArea(){
      return sqrt($this->raio * $this->PI);
    }
    public function calcularPerimetro(){
      return pow($this->raio,2)*$this->PI;
    }
}//fecha circulo
