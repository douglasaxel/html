<?php
include '../modelo/bhaskara.class.php';

$b = new Bhaskara();
$b->setA($_POST['numa']);
$b->setB($_POST['numb']);
$b->setC($_POST['numc']);

echo '<p>Valor de A: '.$b->getA().
     '<br>Valor de B: '.$b->getB().
     '<br>Valor de C: '.$b->getC().
     '<br>Calculo X1: '.$b->calcularX1().
     '<br>Calculo X2: '.$b->calcularX2().'<p>';
