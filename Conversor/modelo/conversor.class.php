<?php
class Conversor{
  private $ano;

  public function Conversor(){}
  public function setAno($ano):void{$this->ano = $ano;}
  public function getAno():int{return $this->ano;}

  public function calcularIdadeMeses():int{
    return $this->ano * 12;
  }

  public function calcularIdadeSemanas():int{
    return $this->ano * 12 * 7;
  }

  public function calcularIdadeDias():int{
    return $this->ano * 12 * 7 * 30;
  }

  public function calcularIdadeHoras():float{
    return $this->ano * 12 * 7 * 30 * 24;
  }

  public function calcularIdadeMinutos():float{
    return $this->ano * 12 * 7 * 30 * 24 * 60;
  }

  public function calcularIdadeSegundos():float{
    return $this->ano * 12 * 7 * 30 * 24 * 60 * 60;
  }

  public function calcularIdadeMilesimo():float{
    return $this->ano * 12 * 7 * 30 * 24 * 60 * 60 * 100;
  }
}
