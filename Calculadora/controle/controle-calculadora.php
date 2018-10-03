<?php
require '../modelo/calculadora.class.php';

$b = new Calculadora();
$b->setN1($_POST['num1']);
$b->setN2($_POST['num2']);

echo '<p>Primerio número'.$b->getN1().
     '<br>Segundo numero'.$b->getN2().
     '<br>Soma: '.$b->somar().
     '<br>subtração: '.$b->subtrair().
     '<br>multiplicação: '.$b->multiplicar().
     '<br>divisão: '.$b->dividir().
     '<br>raiz quadrada: '.$b->calcularRaiz().
     '<br>potencia('.$b->getN1().', '.$b->getN2().'): '.$b->calcularPotencia();
