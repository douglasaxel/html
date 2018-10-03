<?php
require 'cliente.class.php';
require 'Calculadora.class.php';
require 'Conversor.php';

$b = new Calculadora();
$c = new Cliente();
$v = new Conversor();
$c->setNome("Douglas");
$c->setSexo("Masculino");
$c->setIdade(19);
$b->setN1(10);
$b->setN2(10);
$v->setAno(19);

echo '<p>'.$c->getNome();
echo '<br>'.$c->getSexo();
echo '<br>'.$c->verificarSexo();
echo '<br>'.$c->getIdade();
echo '<br>'.$c->calcularIdade();
echo '<br>'.$c->verificarIdade().'</p>';

echo '<p>'.$c->getNome().
     '<br>'.$c->getSexo().
     '<br>'.$c->verificarSexo().
     '<br>'.$c->getIdade().
     '<br>'.$c->calcularIdade();
     '<br>'.$c->verificarIdade().'</p>';

echo '<p>Primerio número'.$b->getN1().
     '<br>Segundo numero'.$b->getN2().
     '<br>Soma: '.$b->somar().
     '<br>subtração: '.$b->subtrair().
     '<br>multiplicação: '.$b->multiplicar().
     '<br>divisão: '.$b->dividir().
     '<br>raiz quadrada: '.$b->operacaoRaiz().
     '<br>potencia('.$b->getN1().', '.$b->getN2().'): '.$b->potenciacao();

 echo '<p>'.$v->getAno().
      '<br>'.$v->calcularIdadeMeses().
      '<br>'.$v->calcularIdadeSemanas().
      '<br>'.$v->calcularIdadeDias().
      '<br>'.$v->calcularIdadeHoras().
      '<br>'.$v->calcularIdadeMinutos().
      '<br>'.$v->calcularIdadeSegundos().
      '<br>'.$v->calcularIdadeMilesimo().'</p>';
