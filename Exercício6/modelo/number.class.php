<?php
class Number{
  private $num1;
  private $num2;
  private $num3;

  public function setNum1(float $num1):void{$this->num1 = $num1;}
  public function getNum1():float{return $this->num1;}
  public function setNum2(float $num2):void{$this->num2 = $num2;}
  public function getNum2():float{return $this->num2;}
  public function setNum3(float $num3):void{$this->num3 = $num3;}
  public function getNum3():float{return $this->num3;}

  public function crescentOrder():string{
    $b;
    $m;
    $s;
    if ($this->num1 > $this->num2 && $this->num1 > $this->num3) {
      $b = $this->num1;
    } else if ($this->num1 > $this->num2 || $this->num1 > $this->num3) {
      $m = $this->num1;
    } else {
      $s = $this->num1;
    }

    if ($this->num2 > $this->num1 && $this->num2 > $this->num3) {
      $b = $this->num2;
    } else if ($this->num2 > $this->num1 || $this->num2 > $this->num3) {
      $m = $this->num2;
    } else {
      $s = $this->num2;
    }

    if ($this->num3 > $this->num2 && $this->num3 > $this->num1) {
      $b = $this->num3;
    } else if ($this->num3 > $this->num2 || $this->num3 > $this->num1) {
      $m = $this->num3;
    } else {
      $s = $this->num3;
    }
    return '<p> Biggest: '.$b.
           '<br>Medium: '.$m.
           '<br>Smallest: '.$s.'</p>';
  }

  public function decrescentOrder(){
    $b;
    $m;
    $s;
    if ($this->num1 < $this->num2 && $this->num1 < $this->num3) {
      $s = $this->num1;
    } else if ($this->num1 > $this->num2 || $this->num1 > $this->num3) {
      $m = $this->num1;
    } else {
      $b = $this->num1;
    }

    if ($this->num2 < $this->num1 && $this->num2 < $this->num3) {
      $s = $this->num2;
    } else if ($this->num2 < $this->num1 || $this->num2 < $this->num3) {
      $m = $this->num2;
    } else {
      $b = $this->num2;
    }

    if ($this->num3 < $this->num2 && $this->num3 < $this->num1) {
      $s = $this->num3;
    } else if ($this->num3 < $this->num2 || $this->num3 < $this->num1) {
      $m = $this->num3;
    } else {
      $b = $this->num3;
    }
    return '<p>Smallest: '.$s.
           '<br>Medium: '.$m.
           '<br>Biggest: '.$b.'</p>';
  }
}
