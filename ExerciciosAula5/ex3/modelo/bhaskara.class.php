<?php
class Bhaskara{
  private $a;
  private $b;
  private $c;
  
  public function Bhaskara(){

  }
  public function getA():float{
    return $this->a;
  }
  public function setA($a):void{
    $this->a=$a;
  }
  public function getB():float{
    return $this->b;
  }
  public function setB($b):void{
    $this->b=$b;
  }
  public function getC():float{
    return $this->c;
  }
  public function setC($c):void{
    $this->c=$c;
  }
  public function getDelta():float{
    return $this->delta;
  }
  public function setDelta():void{
    $this->delta=$delta;
  }

  private function calcularDelta():float{
    $t=pow($this->b,2)+(($this->a*-4)*$this->c);
    if($t<0){
      return 0;
    }
      return $t;
  }

  public function calcularX1():float{

      return (-$this->b+sqrt($this->calcularDelta()))/(2*$this->a);
  }
  public function calcularX2():float{
      return (-$this->b-sqrt($this->calcularDelta()))/(2*$this->a);
  }
}
