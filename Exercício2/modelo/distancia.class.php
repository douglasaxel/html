<?php
class Distancia{
  private $x1;
  private $y1;
  private $x2;
  private $y2;

  public function setX1(float $x1):void{$this->x1 = $x1;}
  public function setY1(float $y1):void{$this->y1 = $y1;}
  public function setX2(float $x2):void{$this->x2 = $x2;}
  public function setY2(float $y2):void{$this->y2 = $y2;}
  public function getX1():float{return $this->x1;}
  public function getY1():float{return $this->y1;}
  public function getX2():float{return $this->x2;}
  public function getY2():float{return $this->y2;}

  public function calcularDistancia():float{
    return sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2));


  }
}
