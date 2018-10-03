<?php
class Calculadora{
  private $n1;
  private $n2;

  public function setN1(float $n):void{$this->n1 = $n;}
  public function getN1():float{return $this->n1;}
  public function setN2(float $n):void{$this->n2 = $n;}
  public function getN2():float{return $this->n2;}

  public function somar():float{return $this->n1 + $this->n2;}
  public function subtrair():float{return $this->n1 - $this->n2;}
  public function multiplicar():float{return $this->n1 * $this->n2;}
  public function dividir():float{return $this->n1 / $this->n2;}
  public function calcularRaiz():float{return sqrt($this->n1);}
  public function calcularPotencia():float{return pow($this->n1, $this->n2);}
}//fecha classe
