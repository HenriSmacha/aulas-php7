<?php
class Cartesiano{

  private $x1;
  private $x2;
  private $y1;
  private $y2;

  public function Cartesiano(){

  }

  public function getX1():int{
    return $this->x1;
  }
  public function setX1($x1):void{
    $this->x1 = $x1;
  }
  public function getX2():int{
    return $this->x2;
  }
  public function setX2($x2):void{
    $this->x2 = $x2;
  }
  public function getY1():int{
    return $this->y1;
  }
  public function setY1($y1):void{
    $this->y1 = $y1;
  }
  public function getY2():int{
    return $this->y2;
  }
  public function setY2($y2):void{
    $this->y2 = $y2;
  }

  public function calcularDistancia():float{
    return sqrt(pow((($this->x2)-($this->x1)),2)+pow((($this->y2)-($this->y1)),2));
  }
}
