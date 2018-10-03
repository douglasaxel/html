<?php
class Converter{
  private $real;
  // private $DOLAR = 4.03;
  // private $EURO = 4.74;

  public function setReal(float $real):void{$this->real = $real;}
  public function getReal():float{return $this->real;}

  public function calculateDolar():float{
    return $this->real / 4.03; //$this->DOLAR;
  }

  public function calculateEuro():float{
    return $this->real / 4.74; //$this->EURO;
  }
}
