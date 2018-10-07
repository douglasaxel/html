<?php
class Triangulo{
    private $lad1;
    private $lad2;
    private $lad3;

    public function getLad1():float{return $this->lad1;}
    public function setLad1(float $lad1):void{$this->lad1 = $lad1;}
    public function getLad2():float{return $this->lad2;}
    public function setLad2(float $lad2):void{$this->lad2 = $lad2;}
    public function getLad3():float{return $this->lad3;}
    public function setLad3(float $lad3):void{$this->lad3 = $lad3;}

    public function verificarTriangulo():string{
      if ($this->lad1 < ($this->lad2 + $this->lad3) && $this->lad2 < ($this->lad1 + $this->lad3) && $this->lad3 < ($this->lad2 + $this->lad1)) {
        if (($this->lad1 == $this->lad2 && $this->lad1 != $this->lad3) || ($this->lad1 == $this->lad3 && $this->lad3 != $this->lad2) || ($this->lad3 == $this->lad2 && $this->lad3 != $this->lad1)) {
          return 'Isósceles';
        } else if ($this->lad1 != $this->lad2 && $this->lad1 != $this->lad3 && $this->lad2 != $this->lad3) {
          return 'Escaleno';
        } else if ($this->lad1 == $this->lad2 && $this->lad1 == $this->lad3 && $this->lad2 == $this->lad3) {
          return 'Equilátero';
        }//fecha else if
      }//fecha if
      return 'Este triângulo não existe.';
    }//fecha metodo
}//fecha classe
