<?php
class Padronizacao{
  public static function maiMin($v){return ucwords(strtolower($v));}
  public static function mai($v){return strtoupper($v);}
  public static function min($v){return strtolower($v);}
  public static function juntarNome($n, $s){
    $array = array($n, $s);
    $nome = implode(' ', $array);
    return $nome;
    // $array = array($n, $s);
    // $nome = implode(' ', $array);
    // return $nome;
  }
  public static function juntarData($a, $m, $d){
    $array = array($a, $m, $d);
    $data = (string) implode('-', $array);
    $DateTime = new DateTime($data);
    $DateTime->format('d/m/Y');
    return $DateTime;
  }
}
