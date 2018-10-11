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

  public function decrescentOrder():string{
    if ($this->num1 > $this->num2 && $this->num2 > $this->num3) {
      return '<p>Biggest: '.$this->num1.'<br>Mediun: '.$this->num2.'<br>Smallest: '.$this->num3.'</p>';
    } else if ($this->num1 > $this->num3 && $this->num3 > $this->num2) {
      return '<p>Biggest: '.$this->num1.'<br>Mediun: '.$this->num3.'<br>Smallest: '.$this->num2.'</p>';
    } else if ($this->num2 > $this->num1 && $this->num1 > $this->num3) {
      return '<p>Biggest: '.$this->num2.'<br>Mediun: '.$this->num1.'<br>Smallest: '.$this->num3.'</p>';
    } else if ($this->num2 > $this->num3 && $this->num3 > $this->num1) {
      return '<p>Biggest: '.$this->num2.'<br>Mediun: '.$this->num3.'<br>Smallest: '.$this->num1.'</p>';
    } else if ($this->num3 > $this->num1 && $this->num1 > $this->num2) {
      return '<p>Biggest: '.$this->num3.'<br>Mediun: '.$this->num1.'<br>Smallest: '.$this->num2.'</p>';
    }
    return '<p>Biggest: '.$this->num3.'<br>Mediun: '.$this->num2.'<br>Smallest: '.$this->num1.'</p>';
  }

  public function crescentOrder(){
    if ($this->num1 < $this->num2 && $this->num2 < $this->num3) {
      return '<p>Smallest: '.$this->num1.'<br>Mediun: '.$this->num2.'<br>Biggest: '.$this->num3.'</p>';
    } else if ($this->num1 < $this->num3 && $this->num3 < $this->num2) {
      return '<p>Smallest: '.$this->num1.'<br>Mediun: '.$this->num3.'<br>Biggest: '.$this->num2.'</p>';
    } else if ($this->num2 < $this->num1 && $this->num1 < $this->num3) {
      return '<p>Smallest: '.$this->num2.'<br>Mediun: '.$this->num1.'<br>Biggest: '.$this->num3.'</p>';
    } else if ($this->num2 < $this->num3 && $this->num3 < $this->num1) {
      return '<p>Smallest: '.$this->num2.'<br>Mediun: '.$this->num3.'<br>Biggest: '.$this->num1.'</p>';
    } else if ($this->num3 < $this->num1 && $this->num1 < $this->num2) {
      return '<p>Smallest: '.$this->num3.'<br>Mediun: '.$this->num1.'<br>Biggest: '.$this->num2.'</p>';
    }
    return '<p>Smallest: '.$this->num3.'<br>Mediun: '.$this->num2.'<br>Biggest: '.$this->num1.'</p>';
  }
}
