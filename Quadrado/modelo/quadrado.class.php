<?php
class Quadrado{
  private $lado;

  public function setLado(int $lado):void{$this->lado = $lado;}
  public function getLado():int{return $this->lado;}
  public function areaQuadrado():int{return $this->lado * $this->lado;}
  public function perimetroQuadrado():int{return $this->lado * 4;}
}';
