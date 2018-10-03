<?php
class Circulo{
  private $r;

  public function getRaio():float{return $this->r;}
  public function setRaio(float $r):void{$this->r = $r;}
  public function calcularArea():float{return pi() * pow($this->r,  2);}
  public function calcularPerimetro():float{return 2 * pi() * $this->r;}
}
